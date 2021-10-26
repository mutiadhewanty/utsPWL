<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gmapsController extends Controller
{
    public function gmaps(){
        return view('gmaps',[
            "tittle" => "BAKSO PRESIDENT"
        ]);
    }
    
}
