<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // $user = User::where('name', 'ella')->firstOrFail();
    $user = User::whereName('scarlett')->firstOrFail();

    return view('welcome', ['posts' => $user->posts()]);
});

Route::get('/posts/{user:username}', UserPostController::class);
