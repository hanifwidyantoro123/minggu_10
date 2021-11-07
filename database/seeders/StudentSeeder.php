<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710164',
            'name' => 'Celline Salsabiela Z P',
            'class' => 'MI 2E',
            'department' => 'MI',
            'phone_number' => '082134584516',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710054',
            'name' => 'Diska Oktavia',
            'class' => 'MI 2E',
            'department' => 'MI',
            'phone_number' => '089567890765',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710174',
            'name' => 'Edo Galih R',
            'class' => 'MI 2E',
            'department' => 'MI',
            'phone_number' => '089978965312',
        ]);
    }
}
