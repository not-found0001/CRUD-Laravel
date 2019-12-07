<?php

Route::get('/', 'StudentController@index')->name('index');
Route::get('/create', 'StudentController@create')->name('create');
Route::get('edit/{id}', 'StudentController@edit')->name('edit');
Route::get('show/{id}', 'StudentController@show')->name('show');

Route::post('/store', 'StudentController@store')->name('store');
Route::post('update/{id}', 'StudentController@update')->name('update');
Route::get('/delete/{id}', 'StudentController@delete')->name('delete');
?>
