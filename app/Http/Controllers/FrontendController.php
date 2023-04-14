<?php

namespace App\Http\Controllers;

use App\Models\Warung;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $warungs = Warung::all();
        return view ('front.home', ['warungs' => $warungs]);
    }
}
