<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioBlocks extends Model
{
    protected $table = 'portfolio_blocks';
    protected $fillable = ['portfolio_id', 'content', 'bg_color', 'color', 'text_align', 'type', 'order'];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
