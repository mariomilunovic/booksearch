<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name','admin')->first();
        $role_member = Role::where('name','member')->first();

        // admin
        $admin = User::create([
            'name'=>'Marko Marković',
            'email'=>'marko@safemail.com',
            'password'=>Hash::make('123123'),
        ]);
        $admin->roles()->attach($role_admin);

        // member
        $member = User::create([
            'name'=>'Petar Petrović',
            'email'=>'petar@safemail.com',
            'password'=>Hash::make('123123'),
        ]);
        $member->roles()->attach($role_member);
    }
}
