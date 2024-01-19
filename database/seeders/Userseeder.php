<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            [
                'name' => "Not",
                'password' => md5("123456"),
                "email" => "Not@gmail.com",
                "adress" => "tsu",
                "telephone" => "088881623"
            ],
            [
                'name' => "jak",
                'password' => md5("123456"),
                "email" => "jak@gmail.com",
                "adress" => "tsu",
                "telephone" => "088881624"
            ],
            [
                'name' => "sorn",
                'password' => md5("123456"),
                "email" => "sorn@gmail.com",
                "adress" => "tsu",
                "telephone" => "188881623"
            ],
        ]);
    }
}
