<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\RegisMailNotif;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function formReg(){
        return view('form.register');
    }

    public function regisUser(Request $req){
        try {
            DB::beginTransaction();
            $credentials = $req->validate([
                'name' => 'required|min:12',
                'email' => 'required|unique:users|email:dns',
                'password' => 'required|confirmed|min:8',
                'phone' => 'numeric|required',
                'gender' => 'required'
            ]);
            $credentials['password'] = bcrypt($credentials['password']);
            $credentials['isActive'] = 1;
            $credentials['role_user'] = 'Member';
            $user = User::create($credentials);
            DB::commit();
            Auth::login($user);
            $user->notify(new RegisMailNotif);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Ooops Data Yang Anda Masukkan Salah, Silahkan Coba Lagi');
        }
        return redirect('email/verify');
    }
}
