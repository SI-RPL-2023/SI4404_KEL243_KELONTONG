<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplySeekerController extends Controller
{
    public function edit()
    {   
        if (auth()->user()->user_status == 'seeker') {
            return redirect()->route('home');
        }else if (auth()->user()->user_status == 'user') {
            if (auth()->user()->seeker_request_status == 'pending') {
                return redirect()->route('home');
            }
            $user = Auth::user();
            return view ('front.layouts.daftar_seekers', ['user' => $user]);
        }
        else{
            return redirect()->route('/');
        }
    }

    public function update(Request $request) {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $user->name = $request->NamaLengkap;
        $user->seeker_request_status = 'pending';
        $user->seeker_nik = $request->nik;
        $user->seeker_alamat = $request->alamat;
        $user->seeker_alasan = $request->Alasan;
        if ($image = $request->file('Foto')) {
            $destinationPath = 'images/users/';
            $profileImage = "images/users/" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $user->foto = $input['image'];
        }
        $user->save();
        return redirect('/home');
    }
}
