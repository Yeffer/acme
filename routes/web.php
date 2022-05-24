<?php

//Rutas del proyecto

Route::get('/', 'PropietarioController@index')->name('home');
Route::get('propietarios/crear', 'PropietarioController@create')->name('propietarios.crear');
Route::post('propietarios/store', 'PropietarioController@store')->name('propietarios.store');

Route::get('propietarios/{id}', 'PropietarioController@edit')->name('propietarios.edit');
Route::patch('propietarios/{id}/actualiza', 'PropietarioController@update')->name('propietarios.update');
Route::delete('propietarios/{id}', 'PropietarioController@destroy')->name('propietarios.destroy');

Route::get('conductores/crear', 'ConductorController@create')->name('conductores.crear');
Route::post('conductores/store', 'ConductorController@store')->name('conductores.store');
Route::get('conductores/{id}', 'ConductorController@edit')->name('conductores.edit');
Route::patch('conductores/{id}/actualiza', 'ConductorController@update')->name('conductores.update');
Route::delete('conductores/{id}', 'ConductorController@destroy')->name('conductores.destroy');

Route::get('vehiculos/crear', 'VehiculoController@create')->name('vehiculos.crear');
Route::post('vehiculos/store', 'VehiculoController@store')->name('vehiculos.store');
Route::get('vehiculos/{id}', 'VehiculoController@edit')->name('vehiculos.edit');
Route::patch('vehiculos/{id}/actualiza', 'VehiculoController@update')->name('vehiculos.update');
Route::delete('vehiculos/{id}', 'VehiculoController@destroy')->name('vehiculos.destroy');

