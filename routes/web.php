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
Route::get('consultas', 'ConsultaController@index')->name('home');
Route::get('exames', 'ExameController@index')->name('home');

Route::get('consultas.create', 'ConsultaController@criar')->name('home');
Route::get('exames.create', 'ExameController@criar')->name('home');

Route::post('consultas.salvar', 'ConsultaController@salvar');
Route::get('consultas/{consulta}/editar', 'ConsultaController@editar')->name('home');
Route::patch('consultas/{consulta}', 'ConsultaController@atualizar');
Route::delete('consultas/{consulta}', 'ConsultaController@deletar');

Route::post('logout', 'LoginController@logout');



Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home_admin', 'AdminController@index')->name('home');


Auth::routes();
         
route::get( 'admin_login','AdminAuth\LoginController@showLoginForm');
route::post( 'admin_login',' AdminAuth\LoginController@login');


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('amdin_login', 'AdminAuth\LoginController@showLoginForm');
    Route::post('admin_login', 'AdminAuth\LoginController@login');
    Route::post('admin_logout', 'AdminAuth\LoginController@logout');
});
route::post('admin_logout','AdminAuth\LoginController@logout') ;
route::post('admin_password.email','AdminAuth\ForgotPasswordController@sendResetLinkEmail');
route::get( 'admin_password.reset','AdminAuth\ForgotPasswordController@showLinkRequestForm') ;
route:: post('admin_password.reset','AdminAuth\ResetPasswordController@reset');
route::get(' admin_password/reset/{token}  ','AdminAuth\ResetPasswordController@showResetForm');
route::get( ' admin_register','AdminAuth\RegisterController@showRegistrationForm');
route::post('admin_register','AdminAuth\RegisterController@register');


Route::group(['prefix' => 'gerente'], function () {
  Route::get('/login', 'GerenteAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'GerenteAuth\LoginController@login');
  Route::post('/logout', 'GerenteAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'GerenteAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'GerenteAuth\RegisterController@register');

  Route::post('/password/email', 'GerenteAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'GerenteAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'GerenteAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'GerenteAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'medico'], function () {
  Route::get('/login', 'MedicoAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'MedicoAuth\LoginController@login');
  Route::post('/logout', 'MedicoAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'MedicoAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'MedicoAuth\RegisterController@register');

  Route::post('/password/email', 'MedicoAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'MedicoAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'MedicoAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'MedicoAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'funcionario'], function () {
  Route::get('/login', 'FuncionarioAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'FuncionarioAuth\LoginController@login');
  Route::post('/logout', 'FuncionarioAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'FuncionarioAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'FuncionarioAuth\RegisterController@register');

  Route::post('/password/email', 'FuncionarioAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'FuncionarioAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'FuncionarioAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'FuncionarioAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'atendente'], function () {
  Route::get('/login', 'AtendenteAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AtendenteAuth\LoginController@login');
  Route::post('/logout', 'AtendenteAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AtendenteAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AtendenteAuth\RegisterController@register');

  Route::post('/password/email', 'AtendenteAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AtendenteAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AtendenteAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AtendenteAuth\ResetPasswordController@showResetForm');
});
