<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Faker\Factory;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *'
     * @return void
     */
    public function run()
    {
        $siswa = Siswa::truncate();
        $faker = Factory::create('id_ID');

        for ($i=0; $i < 60; $i++) { 
            $siswa->create([
                'nama_lengkap' => $faker->name(),
                'nama_panggilan' => $faker->firstname(),
                'tempat_lahir' => $faker->city(),
                'tanggal_lahir' => $faker->date(),
                'nik' => rand(111111111,22121212222220),
                'nis' => rand(111111111,22121212222220),
                'anak_ke' => rand(1,10),
                'jumlah_saudara' => rand(1,10),
                'tinggi_badan' => rand(160,220),
                'berat_badan' => rand(40,80),
                'alamat_lengkap' => $faker->address(),
                'no_hp' => $faker->phoneNumber(),
                'asal_sekolah' => $faker->firstname(),
                'agama' => $faker->randomElement(array ('islam','katolik','protestan','hindu','budha','konghucu')) ,
            ]);
        }
    }
}
