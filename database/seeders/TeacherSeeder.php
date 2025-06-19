<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Docent::factory(5)->create()->each(function($docent){
            \App\Models\Vak::factory(3)->create(['docent_id' => $docent->id]);
        });
    }
}
