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
        $portfolio = Portfolio::where('slug', $slug)->with(['category', 'portfolioBlocks'])->first();
        if($portfolio == null){
            abort(404);
        }
        $portfolioBlocks = $portfolio->portfolioBlocks->sortBy('order');

        return view('frontend.portfolio-material', [
            'portfolio' => $portfolio,
            'portfolioBlocks' => $portfolioBlocks
        ]);
    }
}
