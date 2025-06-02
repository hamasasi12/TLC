<?php

namespace Database\Seeders;

use App\Models\CategoryA;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryASeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'HOTS',
                'description' => 'Higher Order Thinking Skills - Kemampuan berpikir tingkat tinggi',
                'time_limit' => '30',
                'passing_score' => '75',
            ],
            [
                'name' => 'PCK',
                'description' => 'Pedagogical Content Knowledge - Pengetahuan konten pedagogis',
                'time_limit' => '30',
                'passing_score' => '75',
            ],
            [
                'name' => 'Literasi',
                'description' => 'Kemampuan membaca dan memahami informasi',
                'time_limit' => '30',
                'passing_score' => '75',
            ],
            [
                'name' => 'Numerasi',
                'description' => 'Kemampuan menggunakan angka dan simbol terkait matematika',
                'time_limit' => '30',
                'passing_score' => '75',
            ],
        ];

        foreach ($categories as $category) {
            CategoryA::create($category);
        }
    }
}
