<?php


Route::get('/', 'CatalogacaoController@list');
Route::get('/home', 'CatalogacaoController@list');
Route::get('/search', 'SearchController@index');


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::resource('catalogacao', 'CatalogacaoController');

});
