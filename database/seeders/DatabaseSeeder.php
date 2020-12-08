<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
/*         \App\Models\User::factory(10)->create();
 */         $this->call(SiswaSeeder::class);
            $this->call(PendidikanSeeder::class);
            $this->call(PekerjaanSeeder::class);
            $this->call(IbuSeeder::class);
            $this->call(AyahSeeder::class);
    }
}
