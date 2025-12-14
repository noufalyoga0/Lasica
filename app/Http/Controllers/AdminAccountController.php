<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminAccountController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        $totalUser = User::count();

        return view('admin-accounts', compact('users', 'totalUser'));
    }
}
