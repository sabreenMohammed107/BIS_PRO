<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            [
               'name'=>'BIS',

            ],
            [
               'name'=>'TIS',

            ],

        ];

        foreach ($rows as $key => $row) {
            Department::create($row);
        }
    }
}
