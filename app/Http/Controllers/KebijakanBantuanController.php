<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KebijakanBantuanController extends Controller
{
    public function faq()
    {
        return view('kebijakan&bantuan.faq');
    }
    
    public function kebijakan_privasi()
    {
        return view('kebijakan&bantuan.kebijakan_privasi');
    }

    public function tentang()
    {
        return view('kebijakan&bantuan.tentang');
    }

    public function syarat_dan_ketentuan()
    {
        return view('kebijakan&bantuan.syarat_dan_ketentuan');
    }
    
}
