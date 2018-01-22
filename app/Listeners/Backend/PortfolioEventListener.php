<?php

namespace App\Listeners\Backend;

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
    }
}
