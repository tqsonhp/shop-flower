<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash ;

class SectionUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sectionuser')->insert([
            'name' => "nguyen van cbd",
            'email' => "thecaicot@gmail.com",
            'password' => Hash::make('14102020'), // mã hoá mật khẩu
        ]);
    }
}
