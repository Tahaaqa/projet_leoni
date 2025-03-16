<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function submit(Request $request)
{
    // Validation : Plant est requis, Matricule est optionnel
    $request->validate([
        'filiere' => 'required',  // Plant obligatoire
        'matricule' => 'nullable|string', // Matricule facultatif
    ]);

    // Vérifier la langue choisie et rediriger vers la bonne page
    if ($request->language == 'fr') {
        return redirect()->route('report'); // Page en français
    } else {
        return redirect()->route('report2'); // Page en arabe
    }
}

}
