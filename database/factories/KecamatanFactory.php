<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KecamatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'BMPG-TPQ Kec. Karimun',
            'kecamatan_tpq' => 'Karimun',
            'slug' => 'BMPG-Karimun'
        ];
    }
}
