<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'HomeController@index')->name('index');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/portfolio/{slug}', 'PortfolioController@show')->name('portfolio.show');
Route::get('/company', 'HomeController@company')->name('company');


Route::post('/form-store', 'FormController@store')->name('form-store');
