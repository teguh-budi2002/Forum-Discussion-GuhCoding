<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('form.login');
    }

    public function logProcess(Request $req){
        $v = $req->validate([
            'name' => 'required',
            'password' => 'required'
        ], [
            'name.required' => 'Username Tidak Boleh Kosong.',
            'password.required' => 'Password Tidak Boleh Kosong.',
        ]);

        $user = Auth::getProvider()->retrieveByCredentials($v);
        $remember = $req->remember ? true : false;

        if (Auth::attempt($v, $remember)) {
            $req->session()->regenerate();

            return $this->logoutWhenDoubleLogin($req, $user);
        } elseif (!Auth::validate($v)) {
            return redirect()->back()->with('err', 'Data Yang Anda Masukkan Tidak Ditemukan');
        }
    }

    public function logoutWhenDoubleLogin(Request $req, $user) {
        $log = Auth::logoutOtherDevices($req->password);

        return redirect()->intended('/home');
    }
}
