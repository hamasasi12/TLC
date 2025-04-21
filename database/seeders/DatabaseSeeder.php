<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            RolePermissionSeeders::class,
        ]);
        
        $user = User::factory()->create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'), // password
            'status' => 'active',
            'email_verified_at' => now(),
        ]);
        $user->assignRole('asesi');

        $admin = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'), // password
            'status' => 'active',
            'email_verified_at' => now(),
        ]);
        $admin->assignRole('admin');

        $asesor = User::factory()->create([
            'name' => 'asesor',
            'email' => 'asesor@gmail.com',
            'password' => bcrypt('password'), 
            'status' => 'active',
            'email_verified_at' => now(),
        ]);
        $asesor->assignRole('asesor');



        
        
    }
}
