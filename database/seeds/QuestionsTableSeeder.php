<?php

use App\Category;
use App\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = [
            [
                'id'             => '1',
                'question_text'  => 'Suku Aborigin berasal dari negara?',
                'category_id'    => '1',
            ],
            [
                'id'             => '2',
                'question_text'  => 'Flora yang sangat terkenal di negara jepang adalah...',
                'category_id'    => '1',
            ],
            [
                'id'             => '3',
                'question_text'  => 'Berikut pejuang proklamasi Indonesia kecuali?',
                'category_id'    => '2',
            ],
            [
                'id'             => '4',
                'question_text'  => 'Yang mengetik naskah proklamasi Indonesia adalah?',
                'category_id'    => '2',
            ],
            [
                'id'             => '5',
                'question_text'  => 'Rosi membawa 88 bolpoin. Dia ingin membagikan bolpoin itu kepada teman sekelasnya. Jika setiap orang menerima 4 bolpoin, maka banyak teman Rosi yang mendapat bolpoin ada … orang.',
                'category_id'    => '3',
            ],
        ];

        Question::insert($question);
    }
}
