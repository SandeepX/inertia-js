<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
//Route::get('about/create', [PageController::class, 'create']);
//Route::post('/about/store', [PageController::class, 'storeAboutPageData']);

