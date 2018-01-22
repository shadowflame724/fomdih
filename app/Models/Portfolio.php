<?php

namespace App\Models;

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
        'seo_title', 'seo_description', 'seo_keywords'];


    public function portfolioBlocks()
    {
        return $this->hasMany(PortfolioBlocks::class);
    }

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }
}
