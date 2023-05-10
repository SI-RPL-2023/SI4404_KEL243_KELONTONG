<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{   
    public function edit() {
        $user = Auth::user();
        return view ('front.layouts.profile', ['user' => $user]);
    }

    public function update(Request $request) {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nohp = $request->phone;
        $user->password = Hash::make($request->password);
        if ($image = $request->file('inputImage')) {
            $destinationPath = 'images/users/';
            $profileImage = "images/users/" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $user->foto = $input['image'];
        }
        $user->save();
        return redirect('/profile');
    }
}
