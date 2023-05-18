<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){
        return view('front.layouts.register');
    }

    public function store(Request $request) {
        $user = new User;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->nohp = $request->no_hp;
        $user->password = Hash::make($request->password);
        $user->plan_status = 'free';
        $user->user_status = 'user';
        $user->foto = 'images/avatar.png';
        $user->save();
        return redirect('/login');
    }
}
