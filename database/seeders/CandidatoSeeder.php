<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CandidatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol::create([
            'id' => 1,
            'rol' => 'admin'
        ]);
    }
}
