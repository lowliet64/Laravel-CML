<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('medico')->user();

    //dd($users);

    return view('medico.home');
})->name('home');

