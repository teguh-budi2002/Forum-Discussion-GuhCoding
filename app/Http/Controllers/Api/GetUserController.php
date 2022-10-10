<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GetUserController extends Controller
{
    public function  getUserViaApi() {
        try {
            $users = User::select('name', 'photo_profile', 'photo_profile_fb', 'last_login_at', 'role_user')
                           ->orderBy('last_login_at', 'desc')
                           ->get();
            return response()->json($users, 200);
        } catch (\Throwable $th) {
            $message = "Terjadi Kesalahan Pada Server, Mohon Muat Ulang Browser!";
            return response()->json(['message' => $message], 500);
        }
    }
}
