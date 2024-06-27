<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\hasil;
use App\Models\pemilih;
use App\Models\kandidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function tampiladmin()
    {
        $data = User::all();
        return view('table.admin', compact('data'));
    }
    public function deleteadmin($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/admin');
    }

    public function formadmin()
    {
        return view('table.tambahadmin');
    }
    public function insertadmin(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/admin');
    }
    public function editadmin($id)
    {
        $data = User::find($id);
        return view('table.editadmin', compact('data'));
    }
    public function updateadmin(Request $request, $id)
    {
        $data = User::find($id);
        $data->update($request->all());
        return redirect('/admin');
    }

    public function index()
    {
        $data = kandidat::all();
        return view('table.v_user', compact('data'));
    }
    public function deleteK($id)
    {
        // dd($id);
        $data = kandidat::find($id);
        $data->delete();
        return redirect('/user');
    }


    public function pemilih()
    {
        // dd(Auth::guard('pemilih')->user());
        //  if (auth::guard('pemilih')->check()) {
        //     $id_user = Auth::guard('pemilih')->user()->id_pemilih;
        //     $data['cek_vote'] = hasil::where('pemilih_id', $id_user)->first();
        // }
        $data = kandidat::get();
        return view('v_pemilih', compact('data'));
    }
    public function vote($id)
    {
        $data = Auth::guard('pemilih')->user()->id;
        $sudah_vote = hasil::where('pemilih_id', $data)->exists();
        if ($sudah_vote) {
            return redirect('/logout');
        }
        hasil::create([
            'pemilih_id' => $data,
            'kandidat_id' => $id,
        ]);
        return redirect('/pemilih');
    }
    public function tabelpemilih()
    {
        $data = pemilih::all();
        return view('table.pemilih', compact('data'));
    }
    public function tambahdataP()
    {
        return view('table.tambahpemilih');
    }
    public function insertdataP(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'NISN' => 'required',
            'alamat' => 'required',
        ]);
        pemilih::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'NISN' => $request->NISN,
            'alamat' => $request->alamat,
        ]);
        return redirect('/tabelpemilih');
    }
    public function deleteP($id)
    {
        // dd($id);
        $data = pemilih::find($id);
        $data->delete();
        return redirect('/tabelpemilih');
    }
    public function formedit($id)
    {
        $data = pemilih::find($id);
        return view('table.editpemilih', compact('data'));
    }
    public function updatepemilih(Request $request, $id)
    {
        $data = pemilih::find($id);
        $data->update($request->all());
        return redirect('/tabelpemilih');
    }


    public function indexhasil()
    {
        $data = kandidat::get();
        return view('table.hasil', compact('data'));
    }

    public function tambahdataK()
    {
        return view('table.tambahkandidat');
    }
    public function insertdataK(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_ketos' => 'required',
            'nama_waketos' => 'required',
            'image' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('image'), $imageName);

        kandidat::create([
            'nama_ketos' => $request->nama_ketos,
            'nama_waketos' => $request->nama_waketos,
            'image' => $imageName,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);
        return redirect('/user');
    }
    public function delete($id)
    {
        $data = kandidat::find($id);
        $data->delete();
        return redirect('/user');
    }
    // public function formeditK($id){
    //     $data = kandidat::find($id);
    //     return view('table.editkandidat',compact('data'));
    // }
    // public function updatekandidat(Request $request,$id){
    //     $data = kandidat::find($id);
    //     $data->update($request->all());
    //     return redirect ('/user');
    // }
    public function formeditK($id)
    {
        $data = kandidat::find($id);
        return view('table.editkandidat', compact('data'));
    }
    // public function updatekandidat(Request $request, $id)
    // {
    //     // dd($request->all());
    //     $request->validate([
    //         'nama_ketos' => 'required',
    //         'nama_waketos' => 'required',
    //         'image' => 'required',
    //         'visi' => 'required',
    //         'misi' => 'required',
    //     ]);
       
    //     $imageName = time() . '.' . $request->image->extension();
    //     $request->image->move(public_path('image'), $imageName);


    //     kandidat::find($id)->update([
    //         'nama_ketos' => $request->nama_ketos,
    //         'nama_waketos' => $request->nama_waketos,
    //         'image' => $imageName,
    //         'visi' => $request->visi,
    //         'misi' => $request->misi,
    //     ]);
    //     return redirect('/user');
    // }
    public function updatekandidat(Request $request, $id){
        $data = kandidat::find($id);
        $data->update($request->all());
        return redirect('/user');
    }

}
