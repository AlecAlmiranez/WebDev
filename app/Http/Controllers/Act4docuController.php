<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Act4docuController extends Controller
{
    public function displayPage(){
        // Display the page
        return view('docusubmission');
    }
}
