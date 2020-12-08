<?php

namespace Database\Seeders;

use App\Models\Pekerjaan;
use Illuminate\Database\Seeder;
use Faker\Factory;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *'
     * @return void
     */
    public function run()
    {
        $pekerjaan = Pekerjaan::truncate();
        $faker = Factory::create('id_ID');

        
            $pekerjaan->create(['pekerjaan' => 'Petani']);
            $pekerjaan->create(['pekerjaan' => 'Nelayan']);
            $pekerjaan->create(['pekerjaan' => 'Polisi']);
            $pekerjaan->create(['pekerjaan' => 'Guru']);
            $pekerjaan->create(['pekerjaan' => 'Dokter']);
            $pekerjaan->create(['pekerjaan' => 'Perawat']);
            $pekerjaan->create(['pekerjaan' => 'Bidan']);
            $pekerjaan->create(['pekerjaan' => 'TNI']);
            $pekerjaan->create(['pekerjaan' => 'Satpam']);
            $pekerjaan->create(['pekerjaan' => 'Programer']);
            $pekerjaan->create(['pekerjaan' => 'Designer']);
            $pekerjaan->create(['pekerjaan' => 'Kuli Bangunan']);
            $pekerjaan->create(['pekerjaan' => 'Kuli Tani']);
            $pekerjaan->create(['pekerjaan' => 'Tukang Ojek']);
            $pekerjaan->create(['pekerjaan' => 'Pedagang']);
            $pekerjaan->create(['pekerjaan' => 'Sopir']);
            $pekerjaan->create(['pekerjaan' => 'Wartawan']);
            $pekerjaan->create(['pekerjaan' => 'Dukun']);
            $pekerjaan->create(['pekerjaan' => 'Pilot']);
            $pekerjaan->create(['pekerjaan' => 'Masinis']);
            $pekerjaan->create(['pekerjaan' => 'Tukang Kayu']);
            $pekerjaan->create(['pekerjaan' => 'Astronot']);
            $pekerjaan->create(['pekerjaan' => 'Marbot']);
        
    }
}
