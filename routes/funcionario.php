<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('funcionario')->user();

    //dd($users);

    return view('funcionario.home');
})->name('home');

