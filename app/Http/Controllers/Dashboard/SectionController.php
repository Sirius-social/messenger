<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Section\SectionStoreRequest;
use App\Http\Requests\Dashboard\Section\SectionUpdateRequest;
use App\Models\Page;
use App\Repositories\Dashboard\Page\PageRepositoryEloquent;
use App\Repositories\Dashboard\Page\PageRepositoryInterface;
use App\Repositories\Dashboard\Section\SectionRepositoryEloquent;
use App\Repositories\Dashboard\Section\SectionRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SectionController extends Controller
{
    /**
     * @var \App\Repositories\Dashboard\Section\SectionRepositoryEloquent
     */
    protected SectionRepositoryEloquent $repository;

    /**
     * @var \App\Repositories\Dashboard\Page\PageRepositoryEloquent
     */
    protected PageRepositoryEloquent $page_repository;

    public function __construct()
    {
        $this->repository = app(SectionRepositoryInterface::class);
        $this->page_repository = app(PageRepositoryInterface::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(): Factory|View|Application
    {
        $sections = $this->repository->paginated();
        return view('dashboard.sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(): Factory|View|Application
    {
        $pages = $this->page_repository->all();
        $types = $this->repository->getTypes();
        return view('dashboard.sections.create', compact('pages', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\Section\SectionStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function store(SectionStoreRequest $request): RedirectResponse
    {
        $this->repository->create($request->validated());

        return redirect()->route('sections.index')
            ->with('success', __('The :resource was created!', ['resource' => __('Section')]));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(int $id): Application|Factory|View
    {
        $section = $this->repository->find($id);
        return view('dashboard.sections.show', compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(int $id): Factory|View|Application
    {
        $section = $this->repository->find($id);
        $pages = $this->page_repository->all();
        $types = $this->repository->getTypes();
        return view('dashboard.sections.edit', compact('section', 'pages', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\Section\SectionUpdateRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function update(SectionUpdateRequest $request, int $id): RedirectResponse
    {
        $this->repository->update($request->validated(), $id);

        return redirect()->route('sections.index')
            ->with('success', __('The :resource was updated!', ['resource' => __('Section')]));
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

        return redirect()->route('sections.index')
            ->with('success', __('The :resource was deleted!', ['resource' => __('Section')]));
    }
}
