<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Fonction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;



class PDFExportController extends Controller
{

     // Method to export PDF
     /*
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

     public function generateQrcode()
     {
         // Create a new QR code with your data
         $qrCode = new QrCode('google.com'); // Data for the QR Code



         // Create a writer for the PNG format
         $writer = new PngWriter();

         // Generate the QR code image
         $image = $writer->write($qrCode);

         // Return the generated QR code image as a response
         return response($image->getString(), 200)->header('Content-Type', 'image/png');
     } */



public function exportClientWithQrcode()
{
    // Step 1: Fetch data from your database
    $data = Client::all();  // Adjust this based on your model and query

    // Step 2: Generate the QR code
    $qrCode = new QrCode('http://127.0.0.1:8000/client');  // Data for the QR Code (can be dynamic)
    $writer = new PngWriter();
    $image = $writer->write($qrCode);

    // Step 3: Encode the image as base64 (so you can embed it in the PDF)
    $base64Image = base64_encode($image->getString());

    // Step 4: Load the view with the data and QR code (you need to pass both)
    $pdf = PDF::loadView('pdf.clientreport', compact('data', 'base64Image'));

    // Step 5: Return the PDF as a download
    return $pdf->download('clientreport.pdf');
}


public function exportFonctionWithQrcode()
{
    // Step 1: Fetch data from your database
    $data = Fonction::all();  // Adjust this based on your model and query

    // Step 2: Generate the QR code
    $qrCode = new QrCode('http://127.0.0.1:8000/fonction');  // Data for the QR Code (can be dynamic)
    $writer = new PngWriter();
    $image = $writer->write($qrCode);

    // Step 3: Encode the image as base64 (so you can embed it in the PDF)
    $base64Image = base64_encode($image->getString());

    // Step 4: Load the view with the data and QR code (you need to pass both)
    $pdf = PDF::loadView('pdf.fonctionreport', compact('data', 'base64Image'));

    // Step 5: Return the PDF as a download
    return $pdf->download('fonctionreport.pdf');
}

}
