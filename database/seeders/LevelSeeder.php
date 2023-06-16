<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            [
               'name'=>'مستوي أول',

            ],
            [
               'name'=>'مستوي تانى',

            ],
            [
                'name'=>'مستوي ثالث',

             ],
             [
                'name'=>'مستوي رابع',

             ],

        ];

        foreach ($rows as $key => $row) {
            Level::create($row);
        }
    }
}
