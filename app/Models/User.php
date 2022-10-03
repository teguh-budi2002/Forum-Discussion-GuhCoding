<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Post;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\RegisMailNotif;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'gender',
        'photo_profile',
        'photo_profile_fb',
        'bio',
        'social_id',
        'email_verified_at',
        'token',
        'isActive',
        'isBanned',
        'role_user',
        'last_login_at',
        'last_login_ip_address'
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'image-optimization' => 'boolean'
    ];

    public function getLastLoginAtAttribute($value) {
        return Carbon::parse($value)->diffForHumans();
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
