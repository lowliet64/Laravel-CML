<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('atendente')->user();

    //dd($users);

    return view('atendente.home');
})->name('home');

