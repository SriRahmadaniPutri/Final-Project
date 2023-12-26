<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'npm' => "2201170053",
            'nama' => 'Sri Rahmadani Putri',
            'alamat' => 'Padang',
            'no_hp' => '088290430954',
        ]);
    }
}
