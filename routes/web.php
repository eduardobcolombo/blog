<?php

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', ['as'=>'blog.index','uses'=>'BlogController@index']);
Route::get('/show/{id}', ['as'=>'blog.show','uses'=>'BlogController@show']);
