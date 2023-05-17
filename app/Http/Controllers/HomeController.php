<?php

namespace App\Http\Controllers;

use App\Models\Warung;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $warungs = Warung::where('verif_status', '=', 'verified')->get();
        return view ('front.layouts.home', ['warungs' => $warungs]);
    }
}