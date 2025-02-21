<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Foto;

class FotoSeeder extends Seeder
{
    public function run()
    {
        Foto::factory(10)->create();
    }
}
