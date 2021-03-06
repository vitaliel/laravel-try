<?php

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');

Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');

Route::post('cards/{card}/notes', 'NotesController@store');
Route::get('notes/{note}/edit', 'NotesController@edit');
Route::patch('notes/{note}', 'NotesController@update');

Auth::routes();

Route::get('vue', 'PagesController@vue');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('buildings', 'BuildingsController@index');
Route::get('buildings/{building}', 'BuildingsController@show');
