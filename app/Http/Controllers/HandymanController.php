<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandymanController extends Controller
{
    public function index()
    {
        return view('handyman');
    }
}
