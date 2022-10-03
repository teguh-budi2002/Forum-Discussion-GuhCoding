<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    public $incrementing = true;

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'post_category');
    }

    public function comments() {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('d F Y');
    }

    public function scopeFilterSearch($query, array $data) {
        $query->when($data['search'] ?? false, function ($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('judul', 'LIKE', '%' . $search . '%');
            });
        });
    }
}
