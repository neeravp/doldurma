<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        return view('posts.index', ['posts' => $user->posts(), 'user' => $user]);
    }
}
