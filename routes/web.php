<?php

use Illuminate\Support\Facades\Route;

use Inertia\Inertia;


Route::get('/', static function () {
    return Inertia::render('Home');
});

Route::get('/about', static function () {
    return Inertia::render('About');
});
