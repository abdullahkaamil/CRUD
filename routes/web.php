<?php

Route::get('/','MainController@index');
// Create
Route::post('main/create','MainController@store')->name('main.create');
// delete
Route::delete('main/delete/{main}','MainController@destroy')->name('main.destroy');
//update
Route::post('update/{main}','MainController@update')->name('main.update2');
//edit
Route::get('edit/{main}','MainController@edit')->name('main.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
