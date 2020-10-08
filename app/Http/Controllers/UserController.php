<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLogin(){
        return view('login');
    }
    public function login(Request $request){
        $user = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (!Auth::attempt($user)){
            return back();
        } else {
            return redirect()->route('admin.dasboard');
        }
    }

}
