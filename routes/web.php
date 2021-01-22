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
    return view('welcome');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/event',function(){
    return view('event');
});

Route::get('/volunteer',function(){
    return view('volunteer');
});

Route::get('/blog',function(){
    return view('blog');
});

Route::get('/liveyouthtalk',function(){
    return view('liveyouthtalk');
});

Route::get('/gallery-view',function(){
    return view('gallery-view');
});

Route::get('/support',function(){
    return view('support');
});

