<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Page\PageStoreRequest;
use App\Http\Requests\Dashboard\Page\PageUpdateRequest;
use App\Models\Page;
use App\Repositories\Dashboard\Page\PageRepositoryEloquent;
use App\Repositories\Dashboard\Page\PageRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * @var \App\Repositories\Dashboard\Page\PageRepositoryEloquent
     */
    protected PageRepositoryEloquent $repository;

    public function __construct()
    {
        $this->repository = app(PageRepositoryInterface::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(): Factory|View|Application
    {
        $pages = $this->repository->paginated();
        return view('dashboard.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(): Factory|View|Application
    {
        return view('dashboard.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\Page\PageStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PageStoreRequest $request): RedirectResponse
    {
        $this->repository->create($request->validated());

        return redirect()->route('pages.index')
            ->with('success', __('The :resource was created!', ['resource' => __('Page')]));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Page $page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Page $page): Factory|View|Application
    {
        return view('dashboard.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Page $page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Page $page): Application|Factory|View
    {
        return view('dashboard.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\Page\PageUpdateRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PageUpdateRequest $request, int $id): RedirectResponse
    {
        $this->repository->update($request->validated(), $id);

        return redirect()->route('pages.index')
            ->with('success', __('The :resource was updated!', ['resource' => __('Page')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(int $id): RedirectResponse
    {
        $this->repository->delete($id);

        return redirect()
            ->route('pages.index')
            ->with('success', __('The :resource was deleted!', ['resource' => __('Page')]));
    }
}
