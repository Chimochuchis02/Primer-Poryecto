<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('services')->insert([
        ['texto' => 'Clases Prácticas'],
        ['texto' => 'Material Didáctico'],
        ['texto' => 'Clases Virtuales'],
    ]);
    }
}
