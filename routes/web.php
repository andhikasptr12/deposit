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

Route::group(['prefix' => 'Deposit'], function () {
    Route::get('/index', 'Deposit\DepositController@index')->name('deposit.index');
    Route::get('/create', 'Deposit\DepositController@create')->name('deposit.create');
    Route::post('/tambah-data', 'Deposit\DepositController@store')->name('deposit.store');
    Route::get('/tambah-saldo/{id}', 'Deposit\TambahSaldoController@create')->name('tambah-saldo');
    Route::get('/kurang-saldo/{id}', 'Deposit\KurangSaldoController@create')->name('kurang-saldo');
    Route::patch('/ubah/{id}', 'Deposit\TambahSaldoController@update')->name('saldo.update');
    Route::patch('/update/{id}', 'Deposit\KurangSaldoController@update')->name('deposit.update');
});