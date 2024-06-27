<?php

namespace App\Http\Controllers;

use App\Models\hasil;
use App\Models\kandidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasilController extends Controller
{
    public function indexhasil()
    {
        // dd(auth::user());
        if (auth::guard('pemilih')->check()) {
            $id_user = Auth::guard('pemilih')->user()->id_pemilih;
            $data['cek_vote'] = hasil::where('pemilih_id', $id_user)->first();
        }
        $data['kandidat'] = kandidat::all();
        return view('table.hasil', $data);
    }
    // public function index(){
    //     $data =['kandidat'] = kandidat::all();
    //     $data =['']
    // }
}
