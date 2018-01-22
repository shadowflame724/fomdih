<?php

namespace App\Repositories\Backend;

use App\Models\Page;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use App\Events\Backend\Page\PageUpdated;


/**
 * Class PageRepository.
 */
class PageRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Page::class;
    }

    /**
     * @param Page  $page
     * @param array $data
     *
     * @return Page
     */
    public function update(Page $page, array $data) : Page
    {
        return DB::transaction(function () use ($page, $data) {
            if ($page->update([
                'name' => $data['name'],
                'seo_title' => $data['seo_title'],
                'seo_description' => $data['seo_description'],
                'seo_keywords' => $data['seo_keywords']
            ])) {
                event(new PageUpdated($page));

                return $page;
            }

            throw new GeneralException('Ошибка обновление страницы!');
        });
    }
}
