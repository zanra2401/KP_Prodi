<?php

namespace Database\Factories;

use App\Models\Foto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FotoFactory extends Factory
{
    protected $model = Foto::class;

    public function definition()
    {
        return [
            'id_foto'   => (string) Str::uuid(),
            'path_foto' => 'https://i.pinimg.com/736x/29/40/20/29402052686dee87ead06a087811bc26.jpg',
        ];
    }
}
