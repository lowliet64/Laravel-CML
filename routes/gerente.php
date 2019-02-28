<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('gerente')->user();

    //dd($users);

    return view('gerente.home');
})->name('home');

