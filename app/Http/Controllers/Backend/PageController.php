<?php

namespace App\Http\Controllers\Backend;

use App\Models\Page;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\PageRepository;
use App\Http\Requests\Backend\Page\ManagePageRequest;
use App\Http\Requests\Backend\Page\UpdatePageRequest;

/**
 * Class PageController.
 */
class PageController extends Controller
{
    /**
     * @var PageRepository
     */
    protected $pageRepository;

    /**
     * @param PageRepository $pageRepository
     */
    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    /**
     * @param ManagePageRequest $request
     *
     * @return mixed
     */
    public function index(ManagePageRequest $request)
    {
        $pages = $this->pageRepository->all();

        return view('backend.page.index', [
            'pages' => $pages
        ]);
    }

    /**
     * @param Page $page
     * @param ManagePageRequest $request
     *
     * @return mixed
     */
    public function edit(Page $page, ManagePageRequest $request)
    {
        return view('backend.page.edit', [
            'page' => $page
        ]);
    }

    /**
     * @param Page $page
     * @param UpdatePageRequest $request
     *
     * @return mixed
     */
    public function update(Page $page, UpdatePageRequest $request)
    {
        $this->pageRepository->update($page, $request->only('name', 'seo_title', 'seo_description', 'seo_keywords'));

        return redirect()->route('admin.page.index')->withFlashSuccess('Страница обновлена');
    }
}
