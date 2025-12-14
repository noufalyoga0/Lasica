<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
{
    return view('profile');
}


    public function update(Request $request)
{
    $request->validate([
        'name'   => 'required|string|max:255',
        'phone'  => 'nullable|string|max:20',
        'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $user = Auth::user();

    // update data
    $user->name  = $request->name;
    $user->phone = $request->phone; // ← INI YANG KURANG

    // upload avatar
    if ($request->hasFile('avatar')) {
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        $path = $request->file('avatar')->store('avatars', 'public');
        $user->avatar = $path;
    }

    $user->save();

    Auth::setUser($user->fresh());

    return back()->with('success', 'Profil berhasil diperbarui');
}
};