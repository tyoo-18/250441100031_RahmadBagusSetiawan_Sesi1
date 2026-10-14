<?php

namespace Database\Factories;

use App\Models\layanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<layanan>
 */
class layananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_layanan' => strtoupper(fake()->unique()->bothify('Kode-####')),
            'nama_layanan' => fake()->words(3, true),
            'tarif_per_satuan' => null,
        ];
    }
}
