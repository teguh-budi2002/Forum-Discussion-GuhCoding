<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    // protected $table = 'category';
    protected $guarded = ['id'];

    public function posts() {
        return $this->belongsToMany(Post::class, 'post_category');
    }
}
