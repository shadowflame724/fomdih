<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    protected $table = 'portfolio_categories';

    public function works()
    {
        return $this->hasMany(Portfolio::class);
    }
}
