<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function home()
    {
        return "oke ini latihan controller";
    }

    public function beranda()
    {
        $data = array('nama' => "Linda");
        return view('beranda', $data);
    }
}

