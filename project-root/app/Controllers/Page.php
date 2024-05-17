<?php

namespace App\Controllers;

use App\Models\BooksModel;

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
            'title' => 'Home | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('page/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Unipdu Press',
            'alamat' => [
                ['tipe' => 'Rumah', 'alamat' => 'Plandaan', 'kota' => 'Jombang'],
                ['tipe' => 'Kantor', 'alamat' => 'Plandaan', 'kota' => 'Jombang']
            ]
        ];
        return view('page/contact', $data);
    }
}