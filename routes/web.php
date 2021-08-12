<?php

use Illuminate\Support\Facades\Route;

    
    Route::get('/', 'App\Http\Controllers\PagesController@index');
    Route::get('/about', 'App\Http\Controllers\PagesController@about');    
    Route::resource('posts', 'App\Http\Controllers\PostsController');
    Auth::routes();

    // TODO: Redo all the controller references so they are like this one
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
