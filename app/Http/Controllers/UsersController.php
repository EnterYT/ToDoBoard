<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController
{
    public function index()
    {
        $users = User::active()
            ->orderByName()
            ->get(['id', 'name', 'email']);

        return Inertia::render('Users', [
            'users' => $users
        ]);
    }
}
