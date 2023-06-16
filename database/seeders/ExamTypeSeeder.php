<?php

namespace Database\Seeders;

use App\Models\Exam_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            [
               'type'=>'ميد ترم',

            ],
            [
               'type'=>'عملي وشفوي',

            ],
            [
                'type'=>'فاينال',

             ],

        ];

        foreach ($rows as $key => $row) {
            Exam_type::create($row);
        }
    }
}
