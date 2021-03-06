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
        \App\Models\Nasabah::factory(5)->create();
        $this->call([
            TransaksiSeeder::class,
        ]);
    }
}
