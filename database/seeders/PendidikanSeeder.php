<?php

namespace Database\Seeders;

use App\Models\Pendidikan;
use Illuminate\Database\Seeder;
use Faker\Factory;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *'
     * @return void
     */
    public function run()
    {
        $pendidikan = Pendidikan::truncate();
        $faker = Factory::create('id_ID');
 
            $pendidikan->create(['pendidikan' => 'Tidak Sekolah' ]);
            $pendidikan->create(['pendidikan' => 'SD Sederajat' ]);
            $pendidikan->create(['pendidikan' => 'SMP Sederajat' ]);
            $pendidikan->create(['pendidikan' => 'SMA Sederajat' ]);
            $pendidikan->create(['pendidikan' => 'Kuliah' ]);
    }
}
