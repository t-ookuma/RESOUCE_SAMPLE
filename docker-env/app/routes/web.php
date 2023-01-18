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


Auth::routes();

/**
 * リソースコントローラー用ルーティング
 * ルート確認コマンド：php artisan route:list
 * 
 * 使用しないルートは下記でonly指定(第三引数)
 * Route::resource('/users', 'UsersController', ['only' => ['index', 'show', 'edit', 'update']]);
 * 
 * 使用しないルートは下記でexcept指定(第三引数) ※基本はonly使用
 * Route::resource('/users', 'UsersController', ['except' => ['show', 'update']]);
 */
Route::resource('/users', 'UsersController');
