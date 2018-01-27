<?php

namespace App\Events\Backend\Portfolio;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class PortfolioSaved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    /**
     * @var
     */
    public $portfolio;

    /**
     * @param $portfolio
     */
    public function __construct($portfolio)
    {
        $this->portfolio = $portfolio;
    }

}
