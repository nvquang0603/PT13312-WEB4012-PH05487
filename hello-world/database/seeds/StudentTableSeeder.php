<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('infos')->count() === 0) {
            DB::table('infos')->insert([
                [
                    'name' => 'N V T A',
                    'address' => 'Mỹ Đình',
                    'university' => 'FPoly',
                    'class_id' => 1
                ],
                [
                    'name' => 'N V T B',
                    'address' => 'Lê Đức Thọ',
                    'university' => 'FGreen',
                    'class_id' => 1
                ],
                [
                    'name' => 'N V T C',
                    'address' => 'Nguyễn Cơ Thạch',
                    'university' => 'FU',
                    'class_id' => 3
                ],
            ]);
        }
    }
}
