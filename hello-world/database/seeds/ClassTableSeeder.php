<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('classes')->count() === 0) {
            DB::table('classes')->insert([
                [
                    'name' => 'PT13311',
                    'teacher_name' => 'N V A',
                    'major' => 'CNTT',
                    'max_student' => 50
                ],
                [
                    'name' => 'PT13312',
                    'teacher_name' => 'N V B',
                    'major' => 'MKT',
                    'max_student' => 20
                ],
                [
                    'name' => 'PT13313',
                    'teacher_name' => 'N V C',
                    'major' => 'MUL',
                    'max_student' => 40
                ],
            ]);
        }
    }
}
