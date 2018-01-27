<?php

namespace App\Widgets;

use App\Models\PortfolioCategory;
use App\Repositories\Backend\PortfolioRepository;
use Arrilot\Widgets\AbstractWidget;

class PortfolioWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $portfolioRepo = new PortfolioRepository();
        $categories = PortfolioCategory::all();
        $portfolios = $portfolioRepo->all()->sortBy('order');

        return view('widgets.portfolio_widget', [
            'portfolios' => $portfolios,
            'categories' => $categories
        ]);
    }
}
