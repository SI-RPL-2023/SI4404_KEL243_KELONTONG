<?php

namespace App\Http\Controllers;

use App\Models\Warung;
use App\Models\User;
use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListWarungController extends Controller
{
    public function index(){
        $warungs = Warung::where('verif_status', '=', 'verified')->get();
        return view ('front.layouts.filter_listKelontong', ['warungs' => $warungs]);
    }

    public function filterIndex(Request $request){
        $query = Warung::query();

        if ($request->has('Kategori')) {
            $kategori = $request->input('Kategori');
            $query->where('kategori', '=', $kategori);
        }

        if ($request->has('JamBuka') && $request->has('JamTutup')) {
            $jam_buka = $request->input('JamBuka') . ':00';
            $jam_tutup = $request->input('JamTutup') . ':00';
            $query->where(function ($query) use ($jam_buka, $jam_tutup) {
                $query->whereRaw('time(jam_buka) >= ?', [$jam_buka])
                      ->whereRaw('time(jam_tutup) <= ?', [$jam_tutup]);
            });
        }

        if ($request->has('KotaLokasi')) {
            $kota_lokasi = $request->input('KotaLokasi');
            $query->where('kota_lokasi', '=', $kota_lokasi);
        }

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($query) use ($search) {
                $query->where('nama_wrg', 'like', "%$search%");
            });
        }
        $warungs = $query->get();
        return view('front.layouts.filter_listKelontong', ['warungs' => $warungs]);
    }
  
    public function show($id)
    {
        $warung = Warung::findOrFail($id);
        if (auth()->user()->user_status == 'user') {
            if (auth()->user()->plan_status == 'free') {
                return view('front.layouts.dk_user', ['warung' => $warung]);
            }
            else if (auth()->user()->plan_status == 'premium') {
                $komentars =  Komentar::where('id_wrg', '=', $id)->with('user')->get();
                return view('front.layouts.dk_user_langganan', ['warung' => $warung, 'komentars' => $komentars]);
            }
        }else if (auth()->user()->user_status == 'seeker') {
            if (auth()->user()->plan_status == 'free') {
                return view('front.layouts.dk_seekers', ['warung' => $warung]);
            }
            else if (auth()->user()->plan_status == 'premium') {
                $komentars =  Komentar::where('id_wrg', '=', $id)->with('user')->get();
                return view('front.layouts.dk_seekers_langganan', ['warung' => $warung, 'komentars' => $komentars]);
            }
        } else if (auth()->user()->user_status == 'admin'){
            return view('front.layouts.dk_seekers_langganan', ['warung' => $warung]);
        }
        else{
            return redirect()->route('/');
        }
    }

    public function addKomentar($id, Request $request)
    {
        $komentar = new Komentar;
        $komentar->id_wrg = $id;
        $komentar->id_usr = Auth::id();;
        $komentar->isi = $request->Komentar;
        $komentar->save();
        return redirect()->route('viewDetailWarung',  ['id' => $id]);
    }
}
