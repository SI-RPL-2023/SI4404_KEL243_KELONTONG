<?php

namespace App\Http\Controllers;

use App\Models\Warung;
use Illuminate\Http\Request;

class ListWarungController extends Controller
{
    public function index(){
        $warungs = Warung::where('verif_status', '=', 'verified')->get();
        return view ('front.layouts.filter_listKelontong', ['warungs' => $warungs]);
    }

    public function filterIndex(Request $request){
        // Start with a base query
        $query = Warung::query();

        // Apply filters
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

        // Get filtered warungs
        $warungs = $query->get();
        // Return the filtered warungs to the view
        return view('front.layouts.filter_listKelontong', ['warungs' => $warungs]);
    }
}
