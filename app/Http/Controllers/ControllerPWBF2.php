<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPWBF2 extends Controller
{
    public function beranda()
    { 
        return view('beranda', [
            "title" => "Beranda"
        ]);
    }

    public function beranda2()
    { 
        return view('beranda2', [
            "title" => "Beranda"
        ]);
    }

    public function produk()
    {
        return view('layout.layoutpegawai', [
            "title" => "Pengadaan Barang"
        ]);
      
    }

    public function about()
    {
        return  view('about', [
            "title" => "About"
        ]);
    }

    public function contact()
    {
        return view('contact', [
            "title" => "Contact",
            "nama1" => "1. Muhammad Faishal Hafizh Mumtaz Galip (152011513002)",
            "nama2" => "2. Fariz Rahman (152011513028)",
            "image1" => "Ishal.jpg",
            "image2" => "Tower.jpg"
        ]);
    }

    public function forgot()
    {
        return view('forgot');
    }

    public function account()
    {
        return view('account');
    }
}
