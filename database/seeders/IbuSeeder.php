<?php

namespace Database\Seeders;

use App\Models\Ibu;
use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Faker\Factory;

class IbuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *'
     * @return void
     */
    public function run()
    {
        $ibu = Ibu::truncate();
        $faker = Factory::create('id_ID');
        $siswa = Siswa::all();

        for ($i=0; $i < $siswa->count(); $i++) { 
            $ibu->create([
                'nama_lengkap' => $faker->name('female') ,
                'pendidikan_id' => rand(1,5) ,
                'pekerjaan_id' => rand(1,23) ,
                'tanggal_lahir' => $faker->date() ,
                'tempat_lahir' => $faker->city() ,
                'id_siswa' => $siswa[$i]->id,
                'no_hp' => $faker->phoneNumber(),
                'penghasilan_perbulan' => rand(1000,10000000),
                'is_live' => $faker->randomElement(array ('meninggal','hidup'))
                ]);
        }
    }
}
