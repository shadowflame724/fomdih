<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Repositories\Backend\PortfolioRepository;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $slug = 'index';
        $page = $this->getModel($slug);

        return view('frontend.' . $slug, [
            'page' => $page
        ]);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function contacts()
    {
        $slug = 'contacts';
        $page = $this->getModel($slug);

        return view('frontend.' . $slug, [
            'page' => $page
        ]);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function portfolio()
    {
        $slug = 'portfolio';
        $page = $this->getModel($slug);

        return view('frontend.' . $slug, [
            'page' => $page
        ]);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function company()
    {
        $slug = 'company';
        $page = $this->getModel($slug);

        return view('frontend.' . $slug, [
            'page' => $page
        ]);
    }

    private function getModel($slug)
    {
        $page = Page::where('slug', $slug)->first();

        if ($page != null) {
            return $page;
        } else {
            abort(404);
        }
    }
}
