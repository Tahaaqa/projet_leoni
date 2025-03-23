<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Exports\ReportsExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportEmail extends Mailable
{
    use Queueable, SerializesModels;


    public function build()
    {
        $fileName = 'reports_'.time().'.xlsx';
        $filePath = storage_path('app/public/' . $fileName);

        // Generate Excel file
        Excel::store(new ReportsExport, $fileName, 'local');

        return $this->subject('Rapport des Activités')
            ->view('emails.report')
            ->attach($filePath);
    }
}
