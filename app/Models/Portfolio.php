<?php

namespace App\Models;

use App\Events\Backend\Portfolio\PortfolioSaved;
use App\Models\Traits\Attribute\PortfolioAttribute;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use Sluggable;
    use PortfolioAttribute;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $table = 'portfolios';
    protected $fillable = ['type', 'name', 'company_name', 'slug', 'description', 'category_id', 'header_image',
        'main_image', 'main_color', 'blot_color', 'svg', 'thumb_image',
        'seo_title', 'seo_description', 'seo_keywords', 'order',
        'thx_attention_color', 'thx_but_color', 'thx_text_color', 'thx_but_color_hv', 'thx_text_color_hv',
        'header_type', 'page_head_color', 'page_head_bread_color', 'page_head_bread_active_color'];

    protected $dispatchesEvents = [
        'saved' => PortfolioSaved::class,
    ];


    public function portfolioBlocks()
    {
        return $this->hasMany(PortfolioBlocks::class);
    }

    public function categories()
    {
        return $this->belongsToMany(PortfolioCategory::class, 'category_portfolios',
            'portfolio_id', 'portfolio_category_id');
    }
}
