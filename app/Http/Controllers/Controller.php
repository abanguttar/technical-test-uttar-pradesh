<?php

namespace App\Http\Controllers;

use stdClass;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function index()
    {

        $val = new stdClass();
        $val2 = new stdClass();
        $val3 = new stdClass();
        $val->title = 'Starter';
        $val->icon = 'lamp.png';
        $val->content = [
            'LMS + kelas by Kelas.Center',
            'Up to 5 users',
            'No charge per user',
            'Up to 20 pilihan kelas',
            'Update pergantian kelas / 3 bulan',
            'Sertifikat',
            'Konsultasi Gratis',
            'Dedicated assistant',
            'Full support 7x24 jam',
        ];
        $val->discount = 159000;
        $val->reguler = 187500;

        $val2->title = 'Basic';
        $val2->icon = 'people.png';
        $val2->content = $val->content;
        $val2->content[1] = '6-49 users';
        $val2->content[3] = 'Up to 50 pilihan kelas';
        $val2->discount = 159000;
        $val2->reguler = 187500;

        $val3->title = 'Pro';
        $val3->icon = 'people2.png';
        $val3->content = $val->content;
        $val3->content[1] = '50-100 users';
        $val3->content[3] = 'All Access Class';
        $val3->reguler = 3750000;
        $val3->discount = 2900000;
        $pakets = [$val, $val2, $val3];


        $fVal1 = new stdClass();
        $fVal2 = new stdClass();
        $fVal3 = new stdClass();
        $fVal1->title = 'Company';
        $fVal1->content = [
            'Tentang Kami',
            'Ajukan Demo',
            'Kelas.Work',
            'Kelas.Com',
        ];
        $fVal2->title = 'Kebijakan';
        $fVal2->content = [
            'Kebijakan Privasi',
            'Syarat & Ketentuan',
        ];
        $fVal3->title = 'Hubungi Kami';
        $fVal3->content = [

            'Nabilla.Anggraini@kelas.com',
            '+62 811 3366 763 (Nabilla Anggraini)',
        ];
        $footer = [$fVal1, $fVal2, $fVal3];
        return view('content', compact('pakets', 'footer'));
    }

    public function cacheImg($folder, $file)
    {
        $path = public_path('assets/' . $folder . '/' . $file);
        $file = file_get_contents($path);
        $mimes = mime_content_type($path);
        return response($file, 200, [
            'content-type' =>  $mimes,
            'cache-control' => 'public, max-age=3600'
        ]);
    }
}
