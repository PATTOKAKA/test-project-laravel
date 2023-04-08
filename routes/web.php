<?php

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

// http://localhost:88/laravel_training/test-project/public/hello/test
Route::get('hello/{msg?}', function($msg = 'no message') {
    $html = <<< EOF
    <html><body><h1>Hello テスト{$msg}</h1></body></html>
    EOF;

    return $html;
});
