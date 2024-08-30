<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GenerarQRController extends Controller
{
    public function showForm()
    {
        return view('generate_qr');
    }

    public function generateQRCodes(Request $request)
    {
        $quantity = $request->input('quantity');
        $downloadPath = $request->input('download_path');

        for ($i = 0; $i < $quantity; $i++) {
            $randomCode = Str::random(10);
            $url = "https://uniformespnc.com/codigo/" . $randomCode;

            $qrCode = QrCode::format('png')
                ->size(500)
                ->color(0, 0, 0)
                ->margin(1)
                ->errorCorrection('H')
                ->merge(public_path('LogoPNC2.PNG'), 0.3, true)
                ->generate($url);

            $fileName = $downloadPath . '/QRCode_' . $randomCode . '.png';

            file_put_contents($fileName, $qrCode);
        }

        return back()->with('success', 'Códigos QR generados y guardados en la ruta especificada.');
    }
}
