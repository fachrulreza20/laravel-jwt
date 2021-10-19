<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersegiController extends Controller
{
    public function index(Request $request){


            $panjang = $request['panjang'];
            $lebar = $request['lebar'];

            echo "Luas Persegi = Panjang x Lebar || $panjang x $lebar = ".$panjang*$lebar;
    }
}
