<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function index(){
        if (auth()->user()->user_status == 'user') {
            if (auth()->user()->plan_status == 'free') {
                return view('front.layouts.langganan');
            }
            else if (auth()->user()->plan_status == 'premium') {
                return redirect()->route('home');
            }
        }else if (auth()->user()->user_status == 'seeker') {
            if (auth()->user()->plan_status == 'free') {
                return view('front.layouts.langganan');
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
}
