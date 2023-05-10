<?php

namespace App\Http\Controllers;

use App\Models\Warung;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $warungs = Warung::where('verif_status', '=', 'verified')->take(6)->get();
        return view ('front.home', ['warungs' => $warungs]);
    }
}
