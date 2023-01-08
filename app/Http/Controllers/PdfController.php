<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{


    public function print()
    {
         


        $data = [
            "name" => "ikram"
         ];
        $pdf = PDF::loadView('invoice', $data);
        $pdf->setOption('enable-local-file-access', true);
        $pdf->setOption('margin-top', 0);
        $pdf->setOption('margin-bottom', 0);
        $pdf->setOption('margin-left', 0);
        $pdf->setOption('margin-right', 0);

        //asd


        return $pdf->stream('invoice.pdf');

        // return 0;
    }
}
