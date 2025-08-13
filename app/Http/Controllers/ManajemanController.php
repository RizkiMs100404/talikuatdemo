<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemanController extends Controller
{
    public function index()
   {
       return view('manajeman.index');
   }
}
