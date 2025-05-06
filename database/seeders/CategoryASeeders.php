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
            ],
            [
                'name' => 'PCK',
                'description' => 'Pedagogical Content Knowledge - Pengetahuan konten pedagogis',
            ],
            [
                'name' => 'LITERASI',
                'description' => 'Kemampuan membaca dan memahami informasi',
            ],
            [
                'name' => 'NUMERASI',
                'description' => 'Kemampuan menggunakan angka dan simbol terkait matematika',
            ],
        ];

        foreach ($categories as $category) {
            CategoryA::create($category);
        }
    }
}
