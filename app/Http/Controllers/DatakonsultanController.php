<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatakonsultanController extends Controller
{
    public function index()
    {
        return view('datakonsultan.index');
    }
}
