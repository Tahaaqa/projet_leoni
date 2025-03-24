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

    public $filePath;
    public $fileName;

    public function __construct($filePath,$fileName)
    {
        $this->filePath = $filePath;
        $this->fileName = $fileName;
    }
    public function build()
    {
        return $this->subject("Rapport d'Incident (CSV)")
            ->view('emails.report')
            ->attach($this->filePath, [
                'as' => $this->fileName,
                'mime' => 'text/csv',
            ]);
    }
}
