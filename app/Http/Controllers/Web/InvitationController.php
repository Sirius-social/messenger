<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Invitation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    /**
     * Display invitation page view.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws \SodiumException
     */
    public function index(Request $request): Factory|View|Application
    {
        $invitation = (new Invitation($request->input('c_i')))->parse();
        return view('web.invitation', ['label' => $invitation['label']]);
    }
}
