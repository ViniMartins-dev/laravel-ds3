<?php

use Illuminate\Http\Request;

Route::get('/login', function () {
    return view('login');
});

Route::post('/home', function (Request $request) {

    session(['username' => $request->input('username')]);
    session(['password' => $request->input('password')]);


    return redirect()->route('home'); 
})->name('home.post');


Route::get('/home', function () {
    
    $username = session('username');
    $password = session('password');

    
    return view('home', compact('username', 'password'));
})->name('home'); 
