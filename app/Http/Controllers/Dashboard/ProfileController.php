<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProfileUpdateRequest;
use App\Models\User;
use App\Services\UploadFile;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(): Factory|View|Application
    {
        return view('dashboard.settings');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\ProfileUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = User::whereId(auth()->id())->firstOr(function () {
            abort(404);
        });

        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email')
        ]);

        if ($request->has('password') && $request->get('password')) {
            $user->changePassword($request->get('password'));
        }

        $user->updateMediaColumn($request, 'photo-path');

        return back()->with('success',  __('The :resource updated', ['resource' => __('User')]));
    }
}
