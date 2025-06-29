<?php

namespace Database\Seeders;

use App\Models\QuestionA;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($categoryId = 1; $categoryId <= 4; $categoryId++) {
            for ($i = 1; $i <= 10; $i++) {
                QuestionA::create([
                    'category_a_id'    => $categoryId,
                    'question_text'  => "Soal ke-$i untuk kategori $categoryId",
                    'image'          => 'contoh_img.png',
                    'option_a'       => 'Pilihan A',
                    'option_b'       => 'Pilihan B',
                    'option_c'       => 'Pilihan C',
                    'option_d'       => 'Pilihan D',
                    'correct_answer' => 'A', // bisa di-random kalau mau
                ]);
            }
        }
    }
}
