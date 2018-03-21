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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
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
Route::get('distribution/{id}/destroy',[
  'uses'=>'DistributionController@destroy',
  'as'=>'admin.distribution.destroy'
]);
});
Route::group(['prefix' => 'admin'], function(){
Route::resource('programa','ProgramaController');
Route::get('programa/{id}/destroy',[
  'uses'=>'ProgramaController@destroy',
  'as'=>'admin.programa.destroy'
]);
});
Route::group(['prefix' => 'admin'], function(){
Route::resource('user','UserController');
Route::get('user/{id}/destroy',[
  'uses' => 'UserController@destroy',
  'as' => 'admin.user.destroy'
]);
});
Route::group(['prefix' => 'admin'], function(){
Route::resource('empleado','EmpleadoController');
Route::get('empleado/{id}/destroy',[
  'uses'=>'EmpleadoController@destroy',
  'as'=>'admin.empleado.destroy'
]);
Route::get('empleado/show/{id}', [
  'uses' => 'EmpleadoController@show',
  'as' => 'admin.empleado.show'
]);
});
Route::group(['prefix' => 'admin'], function(){
Route::resource('contrato','ContratoController');
Route::get('contrato/{id}/destroy',[
  'uses'=>'ContratoController@destroy',
  'as'=>'admin.contrato.destroy'
]);
});
Route::group(['prefix' => 'admin'], function(){
Route::resource('comision','ComisionController');
Route::get('comision/{id}/destroy',[
  'uses'=>'ComisionController@destroy',
  'as'=>'admin.comision.destroy'
]);
Route::get('comision/create/{id}', [
  'uses' => 'ComisionController@create',
  'as' => 'admin.comision.create'
]);
Route::get('comision/show/{id}', [
  'uses' => 'ComisionController@show',
  'as' => 'admin.comision.show'
]);
});
Route::get('profile', ['middleware' => 'auth', function()
{
    Route::resource('contrato','ContratoController');
}]);
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('descargar-contratos', 'ContratoController@excel')->name('Listado.excel');
/////mails////////////////////////////
Route::get('enviar', ['as' => 'enviar', function () {

    $data = ['link' => 'http://styde.net'];

    \Mail::send('alerta.mail', $data, function ($message) {

        $message->from('email@styde.net', 'Styde.Net');

        $message->to('user@example.com')->subject('Notificación');

    });

    return "Se envío el email";
}]);
