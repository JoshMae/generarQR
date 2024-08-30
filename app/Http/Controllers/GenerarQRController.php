<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class GenerarQRController extends Controller
{
    public function generateQrCode()
    {
        $qrCode = QrCode::format('png')
            ->size(500)
            ->color(0,0,0)
            ->margin(1)
            ->errorCorrection('H')
            ->merge(public_path('LogoPNC2.PNG'),0.3,true)
            ->generate('http://papergeometry.online');
        
            $qrCodeDataUri = 'data:LogoPNC2/png;base64,' . base64_encode($qrCode);

            return view('qrcode', compact('qrCodeDataUri'));
    }
}
