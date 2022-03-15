<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProfileUpdateRequest;
use App\Models\User;
use App\Services\UploadFile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
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
    public function update(ProfileUpdateRequest $request)
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

        $user->updatePhotoPath($request, 'user-photo');

        return back()->with('success',  __('The :resource updated', ['resource' => __('User')]));
    }
}
