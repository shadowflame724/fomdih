<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('portfolios', 'PortfolioController', ['except' => ['show']]);
Route::delete('block/{block}', 'PortfolioBlocksController@delete')->name('block.delete');

/**
 * Pages routes
 */
Route::get('pages', 'PageController@index')->name('page.index');
Route::get('pages/{page}', 'PageController@edit')->name('page.edit');
Route::PATCH('pages/{page}', 'PageController@update')->name('page.update');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\UploadController@upload');
    // list all lfm routes here...
});