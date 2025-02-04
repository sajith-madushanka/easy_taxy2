<?php

namespace App\Http\Controllers;



class PageController extends Controller
{
    public function landing()
    {
        return view('landing');
    }
    public function minibus()
    {
        return view('minibusservice');
    }

    public function private()
    {
        return view('privatevehicle');
    }

    public function safari()
    {
        return view('safari');
    }
 
}
