<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tbl_user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('tbl_user')->insert([
            'id_user' => 'admin',
            'password' => \Hash::make('admin'),
            'jabatan' => 'admin',
        ]);
    }
}
