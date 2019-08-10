<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('admins')->count() === 0) {
            DB::table('admins')->insert([
                [
                    'name' => 'PT13311',
                    'university' => 'NTiểu học Nhân Chính',
                    'class_id' => 4,
                    'is_active' => true
                ],
                [
                    'name' => 'PT13312',
                    'university' => 'Tiểu học Nhân Chính',
                    'class_id' => 5,
                    'is_active' => false
                ],
                [
                    'name' => 'PT13313',
                    'university' => 'Tiểu học Nhân Chính',
                    'class_id' => 5,
                    'is_active' => true
                ],
            ]);
        }
    }
}
