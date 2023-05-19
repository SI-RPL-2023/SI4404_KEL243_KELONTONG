<?php

namespace App\Http\Controllers;

use App\Models\Warung;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if (auth()->user()->user_status == 'admin') {
            return redirect()->route('viewAdmin');
        } else{
        $warungs = Warung::where('verif_status', '=', 'verified')->get();
        return view ('front.layouts.home', ['warungs' => $warungs]);
    }}
}