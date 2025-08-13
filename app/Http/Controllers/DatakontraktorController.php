<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatakontraktorController extends Controller
{
    public function index()
    {
        return view('datakontraktor.index');
    }
}
