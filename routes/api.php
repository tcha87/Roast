<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'v1'], function(){
  
  Route::get('/user', 'API\UsersController@getUser');
  Route::get('/cafes', 'API\CafesController@getCafes');
  Route::get('/cafes/{id}', 'API\CafesController@getCafe');
  Route::post('/cafes', 'API\CafesController@postNewCafe');
});
