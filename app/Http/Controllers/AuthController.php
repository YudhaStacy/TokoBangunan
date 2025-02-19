<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function tampilRegistrasi(){
        return view('registrasi');
    }

    function tampilLogin(){
        return view('login');
    }

    function tampilDashboard(){
        return view('dashboard');
    }

    function submitRegistrasi(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        // dd($user);
        return redirect()->route('login');
    }

    function submitLogin(Request $request){
        $data = $request->only('email', 'password');

        $remember = $request->has('remember');

        if(Auth::attempt($data, $remember)) {            
            $request->session()->regenerate();
            return redirect()->route('dashboard.tampil');
        } else {
            return redirect()->back()->with('gagal', 'Email atau password salah');
        }
    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
