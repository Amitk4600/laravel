<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usr;
use Illuminate\Support\Facades\File;

class usrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: 'database/json/usrss.json');
        $users = collect(json_decode($json));

        $users->each(function ($usr) {
            usr::create([
                'name' => $usr->name,
                'email' => $usr->email,
                'age' => $usr->age,
                'city' => $usr->city,

            ]);
        });
    }
}
