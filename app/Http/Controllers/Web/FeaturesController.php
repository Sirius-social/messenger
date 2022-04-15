<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\WEB\Section\SectionRepositoryEloquent;
use App\Repositories\WEB\Section\SectionRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Route;

class FeaturesController extends Controller
{
    protected SectionRepositoryEloquent $section_repository;

    public function __construct()
    {
        $this->section_repository = app(SectionRepositoryInterface::class);
    }

    /**
     * Display a features page view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $sections = $this->section_repository->getByPageRouteName(Route::currentRouteName());

        return view('web.features', compact('sections'));
    }
}
