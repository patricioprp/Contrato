<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'empleados'], function(){

Route::get('view/{id}', [
  'uses' => 'TestController@view',
  'as' => 'empleadosView'
]);
});
Route::group(['prefix' => 'distributions'], function(){

  Route::get('view/{id}', [
    'uses' => 'DistributionController@view',
    'as' => 'distributionView'
  ]);

});
Route::group(['prefix' => 'admin'], function(){

Route::resource('distribution','DistributionController');

});
Route::group(['prefix' => 'admin'], function(){

Route::resource('user','UserController');

});
Route::group(['prefix' => 'admin'], function(){

Route::resource('empleado','EmpleadoController');

});
Route::group(['prefix' => 'admin'], function(){

Route::resource('contrato','ContratoController');

});
