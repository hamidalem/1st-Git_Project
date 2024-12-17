<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Fonction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;


class PDFExportController extends Controller
{

     // Method to export PDF
     public function exportclientPDF()
     {
         // Fetch data from your database
         $data = Client::all(); // Adjust this based on your model and query

         // Load the view with data (create a Blade view file for the PDF layout)
         $pdf = PDF::loadView('pdf.clientreport', compact('data'));

         // Return the generated PDF as a download
         return $pdf->download('clientreport.pdf');
     }


     public function exportfonctionPDF()
     {
         // Fetch data from your database
         $data = Fonction::all(); // Adjust this based on your model and query

         // Load the view with data (create a Blade view file for the PDF layout)
         $pdf = PDF::loadView('pdf.fonctionreport', compact('data'));

         // Return the generated PDF as a download
         return $pdf->download('fonctionreport.pdf');
     }
}
