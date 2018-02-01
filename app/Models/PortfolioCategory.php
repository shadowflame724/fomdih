<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    protected $table = 'portfolio_categories';

    public function works()
    {
        return $this->belongsToMany(Portfolio::class, 'category_portfolios',
            'portfolio_category_id', 'portfolio_id');
    }
}
