<?php
/*
php artisan make:controller HelloControllerにて作成
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HelloController extends Controller
{
    public function index() {
        // Logクラスをuseする
        Log::debug("entering HelloController::index");
        // ↓ 1行のみでよい
        // logger()->debug("debug ログ!");

        $params = [];
        $params = [
            "test1" => 111,
            "test2" => 222
        ];

        // return $html;
        return view('hello/top', $params);
    }
}
