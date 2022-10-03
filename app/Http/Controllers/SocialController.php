<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SocialController extends Controller
{
    use AuthenticatesUsers;
    public function redirectToFB()
    {
        return Socialite::with('facebook')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback(Request $request)
    {
        try {

            $user = Socialite::with('facebook')->user();
            // Mencocokkan antara social_id dari database dan id dari facebook
            $finduser = User::where('social_id', $user->id)->first();

            if($finduser){

                $login = Auth::login($finduser);

                return redirect()->route('home.auth');

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'photo_profile_fb' => $user->avatar_original,
                    'email_verified_at' => Carbon::now(),
                    'social_id'=> $user->id,
                    'isActive' => 1,
                    'password' => bcrypt('u53RlOg1NFaceB00k'),
                    'role_user' => 'Member'
                ]);

                Auth::login($newUser, true);

                return redirect()->route('home.auth');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
