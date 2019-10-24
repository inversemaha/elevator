<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
       return view('general.index');
    }
    public function residential()
    {
        return view('general.residential.index');
    }
}
