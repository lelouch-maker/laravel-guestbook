<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/add-comment', function () {

    return view('add-comment');
})->name('create_comment');

Route::get('/all-comment', function () {
    return view('all-comment');
})->name('view_comment');


Route::post('/comment/submit', 'CommentController@create')->name('send_data');
