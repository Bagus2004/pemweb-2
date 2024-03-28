<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        
        return view('page/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Unipdu Press',
            //'tes' => ['satu', 'dua', 'tiga']
        ];
        
        return view('page/about', $data);
    }

    public function contact()
    {
         $data = [
            'title' => 'Contact | Unipdu Press',
            'alamat' => [
            ['tipe' => 'Rumah', 'alamat' => 'Desa Klitih', 'kota' => 'jombang' ],
            ['tipe' => 'Kantor', 'alamat' => 'Unipdu Jombang', 'kota' => 'jombang' ],
            ]
        ];
            
            return view('page/contact', $data);
            
        }
    }
