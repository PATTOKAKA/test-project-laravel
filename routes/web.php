<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
http://localhost:88/laravel_training/test-project/public/hello/test
へアクセスすると呼ばれる
*/
// Route::get('hello/{msg?}', function($msg = 'no message') {
//     $html = <<< EOF
//     <html><body><h1>Hello テスト{$msg}</h1></body></html>
//     EOF;

//     return $html;
// });

/**
 * ルート情報指定
 * 第二引数には「コントローラ名@アクション名」を指定
 * 以下の書き方はLaravel8以降はアウト
 * Route::get('hello', 'HelloController@index');
 * 完全修飾名App\Http\Controllers\HelloController@index
 * で指定または以下の書き方
 */
// Route::get('hello', 'App\Http\Controllers\HelloController@index');
Route::get('hello', [HelloController::class, 'index']);
