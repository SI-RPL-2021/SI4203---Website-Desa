<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        dd($request->all());
    }
}
