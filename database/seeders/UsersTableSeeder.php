<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tambahkan dua data pengguna ke tabel 'users'
        DB::table('users')->insert([
            'name' => 'Administrasi',
            'email' => 'pt.adoroc@gmail.com',
            'email_verified_at' => now(),
            'roles' => 1,
            'password' => Hash::make('Adoroc123#'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
