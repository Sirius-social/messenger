<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\WEB\Section\SectionRepositoryEloquent;
use App\Repositories\WEB\Section\SectionRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Route;

class IndexController extends Controller
{
    protected SectionRepositoryEloquent $section_repository;

    public function __construct()
    {
        $this->section_repository = app(SectionRepositoryInterface::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(): Application|Factory|View
    {
        $sections = $this->section_repository->getByPageRouteName(Route::currentRouteName());
        return view('web.index', compact('sections'));
    }
}
