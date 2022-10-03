<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name_category' => 'PHP',
            'slug' => 'php'
        ]);
        Category::create([
            'name_category' => 'JAVASCRIPT',
            'slug' => 'javascript'
        ]);
        Category::create([
            'name_category' => 'CSS',
            'slug' => 'css'
        ]);
        Category::create([
            'name_category' => 'HTML',
            'slug' => 'html'
        ]);
        Category::create([
            'name_category' => 'LARAVEL',
            'slug' => 'laravel'
        ]);
        Category::create([
            'name_category' => 'VUE JS',
            'slug' => 'vue-js'
        ]);
        Category::create([
            'name_category' => 'CODEIGNITER',
            'slug' => 'codeigniter'
        ]);
        Category::create([
            'name_category' => 'CURHAT',
            'slug' => 'curhat'
        ]);
    }
}
