<?php

//Rutas del proyecto

Route::get('/', 'PropietarioController@index')->name('home');
Route::get('propietarios/crear', 'PropietarioController@create')->name('propietarios.crear');
Route::post('propietarios/store', 'PropietarioController@store')->name('propietarios.store');

Route::get('conductores/crear', 'ConductorController@create')->name('conductores.crear');
Route::post('conductores/store', 'ConductorController@store')->name('conductores.store');

Route::get('vehiculos/crear', 'VehiculoController@create')->name('vehiculos.crear');
Route::post('vehiculos/store', 'VehiculoController@store')->name('vehiculos.store');
