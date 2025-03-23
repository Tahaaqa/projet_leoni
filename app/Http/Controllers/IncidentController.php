<?php

namespace App\Http\Controllers;

use App\Models\Report;
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
        session(['filiere' => $request->filiere,'language' => $request->language,'matricule' => $request->matricule]);
        if ($request->language == 'fr') {
            return redirect()->route('report'); // Page en français
        } else {
            return redirect()->route('report2'); // Page en arabe
        }


    }

    public function save(Request $request){


        $report = new Report();
        $report->matricule = session()->get('matricule');
        $report->filiere =session()->get('filiere');
        $report->lang =session()->get('language');
        $report->type =session()->get('type');
        $report->emplacement =$request->emplacement;
        $report->report_date =isset($request->report_date) ? date("Y-m-d",strtotime($request->report_date)) : null;
        $report->description =$request->description;
        $report->solution =$request->solution;
        if($report->save()){

            return redirect()->route('incident')->with('success', 'Votre rapport a été enregistré et envoyé. Merci !');

        }else{
            return redirect()->route('incident')->with('error', "Une erreur est survenue lors de l'enregistrement du rapport. Veuillez réessayer.");
        }


    }

}
