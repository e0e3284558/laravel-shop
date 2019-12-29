<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yansongda\Pay\Log;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $aa = $request->all();
        Log::info('值');
        Log::info(json_encode($aa));
    }
}
