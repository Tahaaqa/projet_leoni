<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function submit(Request $request)
    {
        // Récupérer les données du formulaire
        $data = $request->validate([
            'matricule' => 'required|string',
            'filiere' => 'required|string'
        ]);

        // Simuler un traitement (enregistrement dans la base de données)
        return redirect('/incident')->with('success', 'Incident enregistré avec succès!');
    }
}
