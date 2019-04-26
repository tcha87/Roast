<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function(){
  Route::get('/user', function( Request $request ){
    return $request->user();
  });

  Route::get('/cafes', 'API\CafesController@getCafes');
  Route::get('/cafes/{id}', 'API\CafesController@getCafe');
  Route::post('/cafes', 'API\CafesController@postNewCafe');
});
