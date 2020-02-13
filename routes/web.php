<?php


Route::get('/', 'PostController@index')->name('home');
Route::get('post/create', 'PostController@create');
Route::post('post', 'PostController@store');
Route::get('post/{post}', 'PostController@show');
Route::post('post/{post}/comment', 'CommentController@store');

Route::get('post/tag/{tag}', 'TagController@index');

Route::get('register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
Route::get('login', 'SessionController@create')->name('login');
Route::post('login', 'SessionController@store');
Route::get('logout', 'SessionController@destroy');
