<?php

namespace App\Http\Controllers;

use Generator;
use Illuminate\Http\Request;
use Picqer\Barcode\BarcodeGeneratorPNG;

class BarcodeController extends Controller
{
public function generar($codigo){

    $generator = new BarcodeGeneratorPNG();
    $codigoBarras = $generator->getBarcode($codigo, $generator::TYPE_CODE_128);


    return response($codigoBarras,200)
        ->header('content-type', 'img?png');
    }
}
