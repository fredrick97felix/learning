<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    public function index()
    {
        echo "hello";
    }
 
    public function show()
    {
        return view('text');
    }
}
