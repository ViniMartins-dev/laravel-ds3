<?php

use Illuminate\Http\Request;

Route::get('/login', function () {
    return view('login');
});

Route::post('/home', function (Request $request) {

    session(['username' => $request->input('username')]);
    
    $user = $request->input('username');
    $pass = $request->input('password');

    if($user == "admin" && $pass == "123") {
        return redirect()->route('home'); 
    }else{
        echo "erro ao realizar o login. Usuário ou senha incorretos";
    }
})->name('home.post');


Route::get('/home', function () {
    
    $username = session('username');
    $password = session('password');

    
    return view('home', compact('username', 'password'));
})->name('home'); 
