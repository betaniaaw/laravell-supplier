<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_supplier')->insert([
            [
                'id_user' => '788',
                'nama' => 'Betania',
                'username' => 'taniaa',
                'password' => 'Betakeren',
                'level' => 'High',
            ],
            [
                'id_user' => '633',
                'nama' => 'Sintya',
                'username' => 'paramitasinsin',
                'password' => 'Sinsintya',
                'level' => 'Ultra',
            ],
        ]);
    }
}
