<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contact(){
        return view('contact',[
            "tittle" => "CONTACT",
            "isi" => "Anda Bisa Menghubungi Kami Disini"
        ]);
    }
}
