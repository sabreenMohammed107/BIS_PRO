<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            [
               'semesters'=>'الاول',

            ],
            [
               'semesters'=>'الثاني',

            ],

        ];

        foreach ($rows as $key => $row) {
            Semester::create($row);
        }
    }
}
