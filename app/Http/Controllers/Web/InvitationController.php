<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Invitation;
use Illuminate\View\View;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    /**
     * Display invitation page view.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request): View
    {
        if ($invitation = (new Invitation($request->input('c_i')))->parse()) {
            return view('web.invitation', ['label' => $invitation['label']]);
        }

        return abort(404);
    }
}
