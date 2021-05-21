<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lembagaController extends Controller
{
    public function index()
    {
        return view('lembaga');
    }
}