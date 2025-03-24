<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Mail\ReportEmail;
use Illuminate\Support\Facades\Mail;
use function Pest\Laravel\json;

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
            $fileName = 'reports_'.time().'.csv';
            $filePath = storage_path('app/' . $fileName);

            // Fetch data from reports table
            $reports = Report::select('matricule', 'filiere', 'lang', 'type','emplacement','report_date','description','solution')->get();
            // Open file in write mode
            $file = fopen($filePath, 'w');

            // Add CSV Headers
            fputcsv($file, ['Matricule', 'Plant', 'Lang', 'Type','Emplacement','Date','Description','Solution']);

            // Add rows to CSV
            foreach ($reports as $report) {
                fputcsv($file, [$report->matricule, $report->filiere, $report->lang, $report->type, $report->emplacement, $report->report_date, $report->description, $report->solution]);
            }

            // Close file
            fclose($file);
            Mail::to('ben.zouari.intissar@gmail.com')->send(new ReportEmail($filePath,$fileName));
            return redirect()->route('incident')->with('success', 'Votre rapport a été enregistré et envoyé. Merci !');

        }else{
            return redirect()->route('incident')->with('error', "Une erreur est survenue lors de l'enregistrement du rapport. Veuillez réessayer.");
        }


    }

}
