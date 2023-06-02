<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Warung;
use App\Models\User;

class InputWarungController extends Controller
{
     public function create()
    {   
        if (auth()->user()->user_status == 'user') {
            return redirect()->route('home');
        }else if (auth()->user()->user_status == 'seeker') {
            return view('front.layouts.inputwarung');
        }else{
            return redirect()->route('/');
        }
    }

    public function store(Request $request) {
        $warung = new Warung;
        $warung->nama_wrg = $request->NamaKelontong;
        $warung->pemilik = $request->Pemilik;
        $warung->verif_status = 'pending';
        if ($image = $request->file('Foto')) {
            $destinationPath = 'images/warungs/';
            $profileImage = "images/warungs/" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $warung->foto = $input['image'];
        }
        $warung->nohp = $request->NoHp;
        $warung->kategori = $request->input('Kategori');
        $warung->kota_lokasi = $request->input('KotaLokasi');
        $warung->alamat = $request->input('Alamat');
        $warung->jam_buka = $request->input('JamBuka');
        $warung->jam_tutup = $request->input('JamTutup');
        $warung->detail = $request->Description;
        $warung->save();

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $user->seeker_poin = $user['seeker_poin'] + 5000;
        $user->save();
        return view('front.layouts.inputwarung');   
    }
}
