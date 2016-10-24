<?php


Route::get('/', 'CatalogacaoController@list');
Route::get('/home', 'CatalogacaoController@list');
Route::get('/search', 'SearchController@index');

Route::get('manage-vue', 'VueItemController@manageVue');
Route::resource('vueitems','VueItemController');


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::resource('catalogacao', 'CatalogacaoController');

});
