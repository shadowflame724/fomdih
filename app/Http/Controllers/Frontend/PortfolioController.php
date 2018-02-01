<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;

/**
 * Class PortfolioController.
 */
class PortfolioController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->with(['categories', 'portfolioBlocks'])->first();
        if($portfolio == null){
            abort(404);
        }
        $portfolioBlocks = $portfolio->portfolioBlocks->sortBy('order');
        $thxBlock = [];
        $reversed = $portfolioBlocks->reverse();

        foreach ($reversed as $item){
            if($item->bg_color){
                $thxBlock = [
                    'bg_color' => $item->bg_color,
                    'color' => $item->color,
                ];
                break;
            }else{
                continue;
            }
        }

        return view('frontend.portfolio-material', [
            'portfolio' => $portfolio,
            'portfolioBlocks' => $portfolioBlocks,
            'thxBlock' => $thxBlock
        ]);
    }
}
