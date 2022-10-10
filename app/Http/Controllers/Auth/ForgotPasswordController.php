<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ResetPasswordMailNotif;

class ForgotPasswordController extends Controller
{
    public function forgotForm () {
        return view('form.forgot');
    }

    public function submitForgotPasswordForm(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns|exists:users'
        ]);

        $token = Str::random(64);

        User::where('email', $request->email)->update([
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        $isUserActive = User::where('email', $request->email)->first();

        if ($isUserActive === null) {
            return redirect()->back()->with('notFound', 'Email Yang Anda Masukkan Tidak Terdaftar');
        } elseif ($isUserActive->isActive) {
            $isUserActive->notify(new ResetPasswordMailNotif);
            return redirect()->back()->with('message', 'Kami Sudah Mengirimkan Email Link Reset Password');
        }
    }

    public function resetForm($token) {
        return view('form.reset', [
            'token' => $token,
            'user' => User::where('token', $token)->first()
        ]);
    }

    public function formSubmited(Request $request, $email) {
        $validated = $request->validate([
            'password' => 'required|confirmed|string'
        ]);

        $isUpdated = DB::table('users')->where('token', $request->token)->first();
        if (!$isUpdated) {
            return redirect()->back()->with('invalid', 'Invalid Token');
        }

        $user = User::where('email', $email)->update(['password' => Hash::make($request->password)]);

        return redirect('auth/login')->with('successReset', 'Password Sukses Di Ubah');
    }
}
