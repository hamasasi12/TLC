<?php

namespace Database\Seeders;

use App\Models\UserProfile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
                'status' => 'active', 
            ])->assignRole('asesi');

            UserProfile::create([
                'user_id' => $user->id,
                'nik' => $faker->unique()->numerify('################'),
                'nama_depan' => $user->name,
                'instansi' => $faker->company,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date('Y-m-d', '2005-12-31'), 
                'jenis_kelamin' => $faker->randomElement(['L', 'P']),
                'no_wa' =>  '62' . $faker->unique()->numerify('8##########'),
                'profile_image' => 'blankProfile.png', 
                'provinsi' =>  $faker->city,
                'kabupaten' => $faker->city,
                'kelurahan' => $faker->city,
                'kecamatan' => $faker->city,
                // 'custom_instansi' => $faker->companySuffix,
            ]);
        }
    }
}