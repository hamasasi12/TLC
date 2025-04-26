<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\UserAsesor;
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
            IndoRegionSeeder::class
        ]);

        // $user = User::factory()->create([
        //     'name' => 'user',
        //     'email' => 'user@gmail.com',
        //     'password' => bcrypt('password'), // password
        //     'status' => 'active',
        //     'email_verified_at' => now(),
        // ]);
        // $user->assignRole('asesi');

        $user = User::firstOrCreate(
        ['email' => 'user@gmail.com'],
        [
            'name' => 'user',
            'password' => bcrypt('password'),
            'status' => 'active',
            'last_seen_at' => now(),
            'email_verified_at' => now(),
        ]
            );
            $user->assignRole('asesi');


        $admin = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'), // password
            'last_seen_at' => now(),
            'status' => 'active',
            'email_verified_at' => now(),
        ]);
        $admin->assignRole('admin');

        $asesor = User::factory()->create([
            'name' => 'asesor',
            'email' => 'asesor@gmail.com',
            'password' => bcrypt('password'), 
            'last_seen_at' => now(),
            'status' => 'active',
            'email_verified_at' => now(),
        ]);
        $asesor->assignRole('asesor');

        UserAsesor::create([
        'user_id' => $asesor->id,
        'berkas_cv' => null,
        'profile_image' => null,
        ]);


        $this->call([
            UserSeeders::class,
        ]);





    }
}
