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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ADMIN
// PERMISSOES
Route::get('/admin/permissoes', 'AdminController@permissoes')->name('admin.permissoes');
// USUÁRIOS
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth');
Route::get('/admin/usuarios', 'AdminController@usuarios')->name('admin.usuarios');
Route::get('/admin/usuarios/{user}/editar-cadastro', 'AdminController@usuarioEdit')->name('admin.usuario.edit');
Route::patch('/admin/usuarios/{user}/reset-password', 'AdminController@usuarioResetPassword')->name('admin.usuario.resetPassword');
Route::post('/admin/usuarios/{user}/permissions', 'AdminController@usuarioPermissions')->name('admin.usuario.permission.edit');
Route::post('/admin/usuarios/{user}', 'AdminController@usuarioUpdate')->name('admin.usuario.update');

// CLIENTES
Route::get('/clientes', 'ClienteController@index')->name('clientes')->middleware('auth');
Route::get('/clientes/novo-cadastro', 'ClienteController@create')->name('cliente.create');
Route::post('/clientes', 'ClienteController@store')->name('cliente.store');
Route::get('/clientes/{cliente}', 'ClienteController@show')->name('cliente.show');
Route::get('/clientes/{cliente}/editar-cadastro', 'ClienteController@edit')->name('cliente.edit');
Route::put('/clientes{cliente}', 'ClienteController@update')->name('cliente.update');
Route::delete('/clientes/{cliente}', 'ClienteController@destroy')->name('cliente.destroy');


// FORNECEDORES
Route::get('/fornecedores', 'FornecedorController@index')->name('fornecedores')->middleware('auth');
Route::get('/fornecedores/novo-cadastro', 'FornecedorController@create')->name('fornecedor.create');
Route::post('/fornecedores', 'FornecedorController@store')->name('fornecedor.store');
Route::get('/fornecedores/{fornecedor}', 'FornecedorController@show')->name('fornecedor.show');
Route::get('/fornecedores/{fornecedor}/editar-cadastro', 'FornecedorController@edit')->name('fornecedor.edit');
Route::put('/fornecedores{fornecedor}', 'FornecedorController@update')->name('fornecedor.update');
Route::delete('/fornecedores/{fornecedor}', 'FornecedorController@destroy')->name('fornecedor.destroy');
