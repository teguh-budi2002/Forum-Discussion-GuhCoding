<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class UserPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // reset cached roles and permission
         app()[PermissionRegistrar::class]->forgetCachedPermissions();

         Permission::create(['name' => 'delete post']);
         Permission::create(['name' => 'ban user']);
         Permission::create(['name' => 'unban user']);

         $superadminRole = Role::create(['name' => 'super-admin']);
         $superadminRole->givePermissionTo('ban user');
         $superadminRole->givePermissionTo('unban user');
         $superadminRole->givePermissionTo('delete post');

         $user = User::factory()->create([
             'name' => 'Teguh Budi Laksono',
             'email' => 'budilaksono1102@gmail.com',
             'created_at' => Carbon::now(),
             'isActive' => 1,
             'role_user' => 'Super Admin',
             'password' => bcrypt('Teguhbudi1833')
         ]);
         $user->assignRole($superadminRole);
    }
}
