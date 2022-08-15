<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bio;

class BioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Bio::create([
        "akun_id" => "1",
        "nisn" => 12345,
        "gender" => "Laki-laki",
        "placeBorn" => "Wano Kuni",
        "birth" => 130399,
        "agama" => "Ateis",
        "statusAnak" => "Anak ke 2",
        "statusKeluarga" => "Anak",
        "bidangFav" => "Ilmu Pedang",
        "olahraga" => "Pertarungan Pedang",
        "cita" => "Pendekar Pedang"
        ]);

        Bio::create([
            "akun_id" => "2",
            "nisn" => 54321,
            "gender" => "Laki-laki",
            "placeBorn" => "Romance Dawn",
            "birth" => 20499,
            "agama" => "Ateis",
            "statusAnak" => "Anak ke 1",
            "statusKeluarga" => "Anak",
            "bidangFav" => "Berkelahi",
            "olahraga" => "Berkelahi",
            "cita" => "Raja Bajak Laut"
            ]);
        
    }
}
