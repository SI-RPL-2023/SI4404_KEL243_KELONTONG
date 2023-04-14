<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('front.layouts.register');
    }

    public function store(Request $request) {
        $user = new User;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->nohp = $request->no_hp;
        $user->password = $request->password;
        $user->plan_status = 'free';
        $user->user_status = 'user';
        $user->foto = '';
        $user->poin = '0';
        $user->save();
        return redirect('/login');
    }
}
