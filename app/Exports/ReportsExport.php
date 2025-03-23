<?php

namespace App\Exports;

use App\Models\Report;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReportsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Report::select('matricule', 'filiere', 'lang', 'type','emplacement','report_date','description','solution')->get();
    }
    public function headings(): array
    {
        return ['Matricule', 'Plant', 'Lang', 'Type','Emplacement','Date','Description','Solution'];
    }
}
