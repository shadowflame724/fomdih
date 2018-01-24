<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Portfolio\PortfolioCreated;
use App\Events\Backend\Portfolio\PortfolioUpdated;
use App\Events\Backend\Portfolio\PortfolioDeleted;
use App\Models\Portfolio;
use App\Models\PortfolioBlocks;
use App\Repositories\Backend\Access\User\SocialRepository;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * Class PortfolioRepository.
 */
class PortfolioRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Portfolio::class;
    }

    public function all(array $columns = ['*'])
    {
        return parent::all($columns)->load('category');
    }

    /**
     * @param array $data
     *
     * @return Portfolio
     */
    public function create(array $data): Portfolio
    {
        return DB::transaction(function () use ($data) {
            $portfolio = parent::create([
                'company_name' => isset($data['company_name']) ? $data['company_name'] : '',
                'type' => isset($data['type']) ? $data['type'] : 'small',
                'name' => $data['name'],
                'slug' => $data['slug'],
                'category_id' => $data['category_id'],
                'description' => $data['description'],
                'main_color' => isset($data['main_color']) ? $data['main_color'] : '',
                'blot_color' => isset($data['blot_color']) ? $data['blot_color'] : '',
                'svg' => isset($data['svg']) ? $data['svg'] : '',
                'header_image' => isset($data['header_image']) ? $this->saveImg($data['header_image']) : '',
                'main_image' => isset($data['main_image']) ? $this->saveImg($data['main_image']) : '',
                'thumb_image' => isset($data['thumb_image']) ? $this->saveImg($data['thumb_image']) : '',

                'seo_title' => isset($data['seo_title']) ? $data['seo_title'] : '',
                'seo_description' => isset($data['seo_description']) ? $data['seo_description'] : '',
                'seo_keywords' => isset($data['seo_keywords']) ? $data['seo_keywords'] : '',
            ]);

            if ($portfolio) {
                if(isset($data['blocks'])) {
                    $portfolio->portfolioBlocks()->createMany($data['blocks']);
                }
                event(new PortfolioCreated($portfolio));

                return $portfolio;
            }

            throw new GeneralException('Ошибка создания портфолио!');
        });
    }

    /**
     * @param Portfolio $portfolio
     * @param array $data
     *
     * @return Portfolio
     */
    public function update(Portfolio $portfolio, array $data): Portfolio
    {
        return DB::transaction(function () use ($portfolio, $data) {
            if ($portfolio->update([
                'company_name' => isset($data['company_name']) ? $data['company_name'] : $portfolio->company_name,
                'type' => isset($data['type']) ? $data['type'] : $portfolio->type,
                'name' => isset($data['name']) ? $data['name'] : $portfolio->name,
                'slug' => isset($data['slug']) ? $data['slug'] : $portfolio->slug,
                'category_id' => $data['category_id'],
                'description' => isset($data['description']) ? $data['description'] : $portfolio->description,
                'main_color' => isset($data['main_color']) ? $data['main_color'] : $portfolio->main_color,
                'blot_color' => isset($data['blot_color']) ? $data['blot_color'] : $portfolio->blot_color,
                'svg' => isset($data['svg']) ? $data['svg'] : $portfolio->svg,
                'header_image' => isset($data['header_image']) ? $this->saveImg($data['header_image']): $portfolio->header_image,
                'main_image' => isset($data['main_image']) ? $this->saveImg($data['main_image']) : $portfolio->main_image,
                'thumb_image' => isset($data['thumb_image']) ? $this->saveImg($data['thumb_image']) : $portfolio->thumb_image,
                'seo_title' => isset($data['seo_title']) ? $data['seo_title'] : $portfolio->seo_title,
                'seo_description' => isset($data['seo_description']) ? $data['seo_description'] : $portfolio->seo_description,
                'seo_keywords' => isset($data['seo_keywords']) ? $data['seo_keywords'] : $portfolio->seo_keywords,
            ])) {
                foreach ($data['blocks'] as $block){
                    if(isset($block['id'])) {
                        $portfolioBlock = PortfolioBlocks::find($block['id']);
                        $portfolioBlock->update($block);
                    }else{
                        $portfolio->portfolioBlocks()->create($block);
                    }
                }
                event(new PortfolioUpdated($portfolio));

                return $portfolio;
            }

            throw new GeneralException('Ошибка обновление портфолио!');
        });
    }

    /**
     * @param Portfolio $portfolio
     *
     * @return Portfolio
     * @throws GeneralException
     */
    public function forceDelete(Portfolio $portfolio): Portfolio
    {
        return DB::transaction(function () use ($portfolio) {
            // Delete associated relationships

            if ($portfolio->delete()) {
                $this->deletePortfolioImages($portfolio);
                $blocks = $portfolio->portfolioBlocks();
                foreach ($blocks as $block){
                    $block->delete();
                }

                event(new PortfolioDeleted($portfolio));

                return $portfolio;
            }

            throw new GeneralException('Ошибка удаления портфолио!');
        });
    }

    /**
     * @param UploadedFile $file
     */
    private function saveImg($file)
    {
        $name = $file->getClientOriginalName();
        $file->storeAs('public\portfolio', $name);

        return $name;
    }

    private function deletePortfolioImages($portfolio)
    {
        try {
            Storage::delete([$portfolio->main_image,
                $portfolio->header_image,
                $portfolio->thumb_image
            ]);
        } catch (\Exception $exception) {
            throw new GeneralException($exception->getMessage());
        }
    }
}
