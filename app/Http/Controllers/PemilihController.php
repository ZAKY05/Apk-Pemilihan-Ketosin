<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemilihController extends Controller
{
    public function pemilih(){
        return view('v_pemilih');
    }
}
