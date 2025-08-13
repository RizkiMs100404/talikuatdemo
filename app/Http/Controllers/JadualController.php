<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadualController extends Controller
{
    public function index()
   {
       return view('jadual.index');
   }
}
