<?php

namespace App\Models;

use App\Models\Traits\Attribute\PageAttribute;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Sluggable;
    use PageAttribute;

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

    protected $table = 'pages';
    protected $fillable = ['name', 'slug', 'seo_title', 'seo_description', 'seo_keywords'];

}
