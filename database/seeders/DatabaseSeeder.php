<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'role_id'   => 1,
            'name'      => "Muhammad Mu'min Azis",
            'email'     => "admin@gmail.com",
            'password'  => Hash::make('admin123')
        ]);
        
        User::create([
            'role_id'   => 2,
            'name'      => "Ali Ikbal",
            'email'     => "ikbal@gmail.com",
            'password'  => Hash::make('ikbal123')
        ]);

        Role::create([
            'name'      => "Super Admin"
        ]);
        Role::create([
            'name'      => "Admin"
        ]);
    }
}
