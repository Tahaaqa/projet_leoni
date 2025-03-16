<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class incident_otherController extends Controller
{
    public function index()
    {
        return view('pages.incident_other');
    }
}
