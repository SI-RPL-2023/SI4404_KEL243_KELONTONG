<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function edit(){
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        if (auth()->user()->user_status == 'user') {
            if (auth()->user()->plan_status == 'free') {
                return view('front.layouts.payment', ['user' => $user]);
            }
            else if (auth()->user()->plan_status == 'premium') {
                return redirect()->route('home');
            }
        }else if (auth()->user()->user_status == 'seeker') {
            if (auth()->user()->plan_status == 'free') {
                return view('front.layouts.payment', ['user' => $user]);
            }
            else if (auth()->user()->plan_status == 'premium') {
                return redirect()->route('home');
            }
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
        $user->plan_status = 'premium';
        $user->save();
        return redirect('/home');
    }
}
