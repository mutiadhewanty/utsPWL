<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class homeController extends Controller
{
    public function index(){
        return view('home',[
            "tittle" => "REKOMENDASI KULINER DI KOTA MALANG",

            "menu1" => "Bakso President",
            "konten1" => "Bakso President adalah tempat kuliner Malang yang paling legendaris dan wajib untuk dikunjungi. 
            Di tempat kuliner Malang ini, kamu bisa menikmati aneka olahan bakso khas Malang yang rasanya sudah pasti autentik dan juara.
            Kedai Bakso President terletak di Jalan Batanghari No. 5 Malang.",
            
            "menu2" => "Bakso Bakar Pahlawan",
            "konten2" => "Setelah Bakso Presiden yang letaknya berada di pinggir rel kereta api, kini juga ada bakso bakar yang 
            terletak di Jalan Pahlawan Trip atau tidak jauh dari Gereja Besar Jalan Ijen. Bakso bakar yang dijual di sini memiliki citarasa yang sempurna. 
            Adonan daging yang dibuat bakso mampu menyerap bumbu kecap dan pedas yang digunakan saat bakso dibakar.",
            
            "menu3" => "Rawon Nguling",
            "konten3" => "Malang juga memiliki kuliner jenis rawon yang sangat legendaris. Terletak di Jalan Zaenal Arifin, 
            Rawon Nguling berhasil menjadi salah satu kuliner Malang yang terbaik. Yang menjadikan Rawon Nguling berbeda dengan rawon kebanyakan 
            adalah daging yang menjadi isiannya. Biasanya kedai rawon menyajikan daging yang cukup alot karena tidak memotong serat. 
            Daging pada rawon ini cukup empuk dan diiris besar-besar.",
            
            "menu4" => "Bubur Ayam Agus",
            "konten4" => "Bubur Ayam Agus terletak di Jalan Simpang Wilis No. 4 Malang. 
            Di deretan ruko inilah salah satu bubur paling nikmat di Malang dijual. Dari pagi hingga malam, 
            kamu bisa datang untuk menikmati bubur yang memiliki tekstur lembut dan aneka topping nikmat seperti suwir ayam, bawang goreng, 
            dan sayuran hijau seperti bawang daun serta seledri.",
            
            "menu5" => "Pecel Kawi",
            "konten5" => "Bagi masyarakat Jawa Timur, pecel sudah menjadi kuliner khas yang biasanya disantap pada pagi hari. 
            Di Malang sendiri, pecel sudah berkembang dengan pesat dan salah satu tempat kuliner Malang yang terbaik adalah 
            Pecel Kawi yang terletak di Jalan Kawi atau dekat dengan perempatan arah Jalan Besar Ijen.",
            
            "menu6" => "Sate Landak Bu Ria",
            "konten6" => "Ingin merasakan kuliner yang sedikit ekstrem? Datanglah ke Jalan Raya Bugis No. 47, Pakis, Malang. 
            Di tempat wisata kuliner Malang ini, kamu bisa mendapatkan sate yang tidak biasa. Jika biasanya sate menggunakan daging ayam 
            atau daging kambing, di kedai Bu Ria ini, daging yang digunakan adalah daging landak. Ya, hewan yang memiliki duri itu dibakar 
            dan disajikan dengan bumbu kacang dan kecap.",
        ]);
    }
}
