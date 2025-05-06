<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionA extends Model
{
    protected $table = 'questions_a';

    protected $fillable = [
        'category_a_id',
        'question_text',
        'image_path',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'option_e',
        'correct_answer'
    ];
}
