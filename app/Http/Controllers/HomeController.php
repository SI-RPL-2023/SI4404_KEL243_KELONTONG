<?php

namespace App\Http\Controllers;

use App\Models\Warung;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $warungs = Warung::all();
        return view ('front.layouts.home', ['warungs' => $warungs]);
    }
}