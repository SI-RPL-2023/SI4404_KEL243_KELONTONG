<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PointController extends Controller
{
    public function edit(){
        $user = Auth::user();
        if (auth()->user()->user_status == 'user') {
            return redirect()->route('home');
        }else if (auth()->user()->user_status == 'seeker') {
            return view('front.layouts.poin', ['user' => $user]);
        } else if (auth()->user()->user_status == 'admin'){
            return redirect()->route('home');
        }
        else{
            return redirect()->route('/');
        }
    }

    public function update() {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $user->seeker_poin = 0;
        $user->save();
        return redirect('/home');
    }
}
