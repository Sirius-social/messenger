<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    /**
     * Display downloads page view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('web.downloads');
    }
}
