<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TpqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(mt_rand(3, 10)),
            'slug' => $this->faker->slug(),
            'no_statistik' => $this->faker->sentence(),
            'kelurahan' => $this->faker->sentence(),
            'no_hp' => $this->faker->randomDigitNotNull(),
            'alamat' => $this->faker->paragraph(),
            'profil_tpq' => collect($this->faker->paragraphs(mt_rand(5, 20)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''),

            'user_id' => 1,
            'kecamatan_id' => 1,
            'no_hp' => '8215658245'
        ];
    }
}
