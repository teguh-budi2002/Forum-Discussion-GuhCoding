<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Post::factory(40)->create();
        $this->call(UserPermissionSeeder::class);
        $this->call(CategorySeeder::class);
    }
}
