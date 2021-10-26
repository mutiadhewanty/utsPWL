<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function about(){
        return view('about',[
            "tittle" => "ABOUT US",
            "isi" => "Haii..Selamat datang di website kami. Bagi kalian yang akan
            mengunjungi Kota Malang, pastinya harus tahu dulu berbagai kuliner legendaris
            yang ada di Malang. Karena pasti akan percuma juka mengunjungi suatu kota tanpa mencoba
            kuliner - kuliner yang ada di kota tujuan kita. Nahh kalian sudah melakukan
            hal yang tepat karena sudah mengunjungi website ini. Website ini berisi
            berbagai macam rekomendasi kuliner legendaris yang patut untuk dicoba
            yang berada di Kota Malang, tentunya kami bertujuan untuk merekomendasikan kuliner yang harus kamu coba 
            ketika berkunjung ke kota Malang. Di sini kamu akan menemukan berbagai macam kuliner
            mulai dari makanan berat maupun jajanan yang legendaris dari Kota Malang.
            Jadi..Selamat berwisata kuliner!! :D"
        ]);
    }
}
