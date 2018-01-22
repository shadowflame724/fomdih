<?php

namespace App\Listeners\Backend;

/**
 * Class PageEventListener.
 */
class PageEventListener
{
    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Page Updated');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Page\PortfolioUpdated::class,
            'App\Listeners\Backend\PageEventListener@onUpdated'
        );
    }
}
