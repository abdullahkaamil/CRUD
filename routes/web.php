<?php

Route::get('/','MainController@index');
// Create
Route::post('main/create','MainController@store')->name('main.create');
// delete
Route::delete('main/delete/{main}','MainController@destroy')->name('main.destroy');
Route::post('update/{main}','MainController@update')->name('main.update2');
Route::get('edit/{id}','MainController@edit')->name('main.update');
//Route::post('update', 'MainController@update')->name('main.update2');
