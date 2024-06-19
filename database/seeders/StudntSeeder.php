<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\studnt;
use Illuminate\Support\Facades\File;


class StudntSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        studnt::create([
            'name' => fake()->name,
            'email' => fake()->email,
           

        ]);
        // entry with loop 
        for($i =1;$i<=10;$i++){
            studnt::create([
                'name' => fake()->name,
                'email' => fake()->email,
               
    
            ]);
        }

        // $json = File::get(path: 'database/json/student.json');
        // $students  = collect(json_decode($json));
        // $students->each(function ($student) {
        //     studnt::create([
        //         'name' => $student->name,
        //         'email' => $student->email,

        //     ]);
        // });
    }
}
