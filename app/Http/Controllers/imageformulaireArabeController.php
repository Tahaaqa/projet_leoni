<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imageformulaireArabeController extends Controller
{
    public function index (Request $request)
    {
        session(['type' => $request->type]);
        return view('pages.imageformulaireArabe');
    }
}
