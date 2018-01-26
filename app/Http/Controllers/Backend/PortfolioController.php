<?php

namespace App\Http\Controllers\Backend;

use App\Events\Backend\Portfolio\PortfolioDeleted;
use App\Http\Requests\Backend\Portfolio\StorePortfolioRequest;
use App\Models\Portfolio;
use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use App\Repositories\Backend\PortfolioRepository;
use App\Http\Requests\Backend\Portfolio\ManagePortfolioRequest;
use App\Http\Requests\Backend\Portfolio\UpdatePortfolioRequest;

/**
 * Class PortfolioController.
 */
class PortfolioController extends Controller
{
    /**
     * @var PortfolioRepository
     */
    protected $portfolioRepository;

    /**
     * @param PortfolioRepository $portfolioRepository
     */
    public function __construct(PortfolioRepository $portfolioRepository)
    {
        $this->portfolioRepository = $portfolioRepository;
    }

    /**
     * @param ManagePortfolioRequest $request
     *
     * @return mixed
     */
    public function index(ManagePortfolioRequest $request)
    {
        $portfolios = $this->portfolioRepository->all()->sortBy('order');

        return view('backend.portfolio.index', [
            'portfolios' => $portfolios
        ]);
    }

    /**
     * @param ManagePortfolioRequest    $request
     *
     * @return mixed
     */
    public function create(ManagePortfolioRequest $request)
    {
        $categories = PortfolioCategory::select('id', 'name')->get();

        return view('backend.portfolio.create', [
            'categories' => $categories
        ]);
    }

    /**
     * @param StorePortfolioRequest $request
     *
     * @return mixed
     */
    public function store(StorePortfolioRequest $request)
    {
        $this->portfolioRepository->create($request->all());

        return redirect()->route('admin.portfolios.index')->withFlashSuccess('Портфолио создано');
    }

    /**
     * @param Portfolio $portfolio
     * @param ManagePortfolioRequest $request
     *
     * @return mixed
     */
    public function edit(Portfolio $portfolio, ManagePortfolioRequest $request)
    {
        $categories = PortfolioCategory::select('id', 'name')->get();
        $portfolioBlocks = $portfolio->portfolioBlocks()->orderBy('order')->get()->toArray();

        return view('backend.portfolio.edit', [
            'portfolio' => $portfolio,
            'categories' => $categories,
            'portfolioBlocks' => $portfolioBlocks
        ]);
    }

    /**
     * @param Portfolio $portfolio
     * @param UpdatePortfolioRequest $request
     *
     * @return mixed
     */
    public function update(Portfolio $portfolio, UpdatePortfolioRequest $request)
    {
        $this->portfolioRepository->update($portfolio,
            $request->all());

        return redirect()->route('admin.portfolios.index')->withFlashSuccess('Портфолио обновлено');
    }

    /**
     * @param Portfolio              $portfolio
     * @param ManagePortfolioRequest $request
     *
     * @return mixed
     */
    public function destroy(Portfolio $portfolio, ManagePortfolioRequest $request)
    {
        $this->portfolioRepository->forceDelete($portfolio);

        event(new PortfolioDeleted($portfolio));

        return redirect()->route('admin.portfolios.index')->withFlashSuccess('Порфолио удалено');
    }
}
