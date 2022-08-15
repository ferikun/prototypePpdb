<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Akun;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Akun::factory(15)->create();
        // Akun::create([
        //     "role" => "siswa",
        //     "username" => "zoro123",
        //     "fullName" => "Roronoa Zoro",
        //     "email" => "zoro123",
        //     "password" => bcrypt('12345')
        // ]);

        // Akun::create([
        //     "role" => "siswa",
        //     "username" => "Luffy123",
        //     "fullName" => "Monkey D Luffy",
        //     "email" => "luffy123",
        //     "password" => bcrypt('12345')
        // ]);
    }
}
