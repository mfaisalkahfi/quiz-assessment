<?php

use App\Question;
use App\Option;
use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $option = [
            [
                'id'             => '1',
                'option_text'    => 'Australia',
                'points'         => '1',
                'question_id'    => '1',
            ],
            [
                'id'             => '2',
                'option_text'    => 'Amerika',
                'points'         => '0',
                'question_id'    => '1',
            ],
            [
                'id'             => '3',
                'option_text'    => 'Kanada',
                'points'         => '0',
                'question_id'    => '1',
            ],
            [
                'id'             => '4',
                'option_text'    => 'India',
                'points'         => '0',
                'question_id'    => '1',
            ],
            [
                'id'             => '5',
                'option_text'    => 'Mawar',
                'points'         => '0',
                'question_id'    => '2',
            ],
            [
                'id'             => '6',
                'option_text'    => 'Tulip',
                'points'         => '0',
                'question_id'    => '2',
            ],
            [
                'id'             => '7',
                'option_text'    => 'Anggrek',
                'points'         => '0',
                'question_id'    => '2',
            ],
            [
                'id'             => '8',
                'option_text'    => 'Sakura',
                'points'         => '1',
                'question_id'    => '2',
            ],
            [
                'id'             => '9',
                'option_text'    => 'Hasanudin',
                'points'         => '1',
                'question_id'    => '3',
            ],
            [
                'id'             => '10',
                'option_text'    => 'Moh Hatta',
                'points'         => '0',
                'question_id'    => '3',
            ],
            [
                'id'             => '11',
                'option_text'    => 'Ir Soekarno',
                'points'         => '0',
                'question_id'    => '3',
            ],
            [
                'id'             => '12',
                'option_text'    => 'Achmad Soebarjo',
                'points'         => '0',
                'question_id'    => '3',
            ],
            [
                'id'             => '13',
                'option_text'    => 'Sayuti Melik',
                'points'         => '1',
                'question_id'    => '4',
            ],
            [
                'id'             => '14',
                'option_text'    => 'Fatmawati',
                'points'         => '0',
                'question_id'    => '4',
            ],
            [
                'id'             => '15',
                'option_text'    => 'Irma Wati',
                'points'         => '0',
                'question_id'    => '4',
            ],
            [
                'id'             => '16',
                'option_text'    => 'Sukmawati',
                'points'         => '0',
                'question_id'    => '4',
            ],
            [
                'id'             => '17',
                'option_text'    => '33',
                'points'         => '0',
                'question_id'    => '5',
            ],
            [
                'id'             => '18',
                'option_text'    => '22',
                'points'         => '1',
                'question_id'    => '5',
            ],
            [
                'id'             => '19',
                'option_text'    => '24',
                'points'         => '0',
                'question_id'    => '5',
            ],
            [
                'id'             => '20',
                'option_text'    => '42',
                'points'         => '0',
                'question_id'    => '5',
            ],
        ];

        Option::insert($option);
    }
}
