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
    public function about_us()
    {
        return view('general.about_us.index');
    }
    public function services()
    {
        return view('general.services.index');
    }
    public function commercial()
    {
        return view('general.commercial.index');
    }
    public function contact_us()
    {
        return view('general.contact_us.index');
    }
}
