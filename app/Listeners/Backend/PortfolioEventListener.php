<?php

namespace App\Listeners\Backend;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

/**
 * Class PortfolioEventListener.
 */
class PortfolioEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Портфолио создано');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Портфолио обновлено');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Портфолио удалено');
    }

    /**
     * @param $event
     */
    public function onSaved($event)
    {
        $sitemap = App::make("sitemap");
        $nowDatetime = \Carbon\Carbon::now('	Europe/Kiev');
        $baseURL = env('APP_URL');

        $sitemap->add($baseURL, $nowDatetime, '1.0', 'daily');
        $sitemap->add($baseURL . '/company', $nowDatetime, '0.9', 'daily');
        $sitemap->add($baseURL . '/portfolio', $nowDatetime, '0.9', 'daily');
        $sitemap->add($baseURL . '/contacts', $nowDatetime, '0.9', 'daily');

        $portfolios = DB::table('portfolios')->orderBy('order')->get();
        foreach ($portfolios as $portfolio)
        {
            $path = '/portfolio/' . $portfolio->slug;
            $date = $portfolio->updated_at != null ? $portfolio->updated_at : $portfolio->created_at;
            $sitemap->add($baseURL . $path, $date, '0.8', 'daily');
        }
        $sitemap->store('xml', 'sitemap');

        \Log::info('Sitemap сгенерирован');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Portfolio\PortfolioCreated::class,
            'App\Listeners\Backend\PortfolioEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Portfolio\PortfolioUpdated::class,
            'App\Listeners\Backend\PortfolioEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Portfolio\PortfolioDeleted::class,
            'App\Listeners\Backend\PortfolioEventListener@onDeleted'
        );

        $events->listen(
            \App\Events\Backend\Portfolio\PortfolioSaved::class,
            'App\Listeners\Backend\PortfolioEventListener@onSaved'
        );
    }
}
