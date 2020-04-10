<?php

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
    $users = App\User::get();
    return view('welcome',compact('users'));
});

Route::get('/profile/{id}', function ($id) {
    $user = App\User::find($id);
    //dd($user->name);
    return view('profile', compact('user'));
})->name('profile');