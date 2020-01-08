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
    return redirect()->route('postcard.show', 0);
});

Route::get('/postcard/{postcard}', function($postcard) {
    return view('postcards.'.$postcard, compact('postcard'));
})->name('postcard.show');
