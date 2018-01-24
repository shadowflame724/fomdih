<?php

namespace App\Widgets;

use App\Models\Portfolio;
use App\Repositories\Backend\PortfolioRepository;
use Arrilot\Widgets\AbstractWidget;

class FomdihForms extends AbstractWidget
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
        $portfolio =  Portfolio::inRandomOrder()->first();

        return view('widgets.fomdih_forms', [
            'portfolio' => $portfolio
        ]);
    }
}
