<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Warung;

class AdminController extends Controller
{
    public function edit(){
        if (auth()->user()->user_status == 'user' || auth()->user()->user_status == 'seeker') {
            return redirect()->route('home');
        }else if (auth()->user()->user_status == 'admin') {
            $UserCount = User::where('user_status', 'user')->count();
            $SeekerCount = User::where('user_status', 'seeker')->count();
            $verifiedWarungCount = Warung::where('verif_status', 'verified')->count();
            $users = User::whereIn('user_status', ['user', 'seeker'])->get();
            $warungs = Warung::All();
            
            return view('front.layouts.admin', [
                'UserCount' => $UserCount,
                'SeekerCount' => $SeekerCount,
                'verifiedWarungCount' => $verifiedWarungCount,
                'users' => $users,
                'warungs' => $warungs
            ]);
        }else{
            return redirect()->route('/');
        }
    }
    public function updateWarung(Request $request) {
        $warungId = $request->warung_id;
        $warung = Warung::findOrFail($warungId);
        $warung->verif_status = 'verified';
        $warung->save();
        return redirect('/admin');
    }

    public function updateUser(Request $request) {
        $userId = $request->user_id;
        $user = User::findOrFail($userId);
        $user->user_status = 'seeker';
        $user->seeker_request_status = 'approved';
        $user->seeker_poin = 0;
        $user->save();
        return redirect('/admin');
    }

}

