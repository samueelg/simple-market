<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Samuel Aluizio',
            'email' => 'samuel@gmail.com',
            'password' => 'teste123',
            'role' => 'cliente',
        ]);


                DB::table('users')->insert([
            'name' => 'Pedro Henrique',
            'email' => 'pedro@gmail.com',
            'password' => 'teste123',
            'role' => 'funcionario',
        ]);
    }
}
