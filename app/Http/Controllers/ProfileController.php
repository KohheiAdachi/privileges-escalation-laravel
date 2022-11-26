<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = User::firstOrCreate(['session_id' => session()->getId()]);
        return view('profile.edit', compact('user'));
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = User::firstOrCreate(['session_id' => session()->getId()]);

        $user->update($request->all());

        return redirect()->route('profile.edit');
    }
}
