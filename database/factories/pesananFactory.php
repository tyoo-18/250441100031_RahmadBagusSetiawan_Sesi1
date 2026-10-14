<?php

namespace Database\Factories;

use App\Models\pesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<pesanan>
 */
class pesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'layanan_id' => layananFactory::factory(),
            'nama_pelanggan' => fake()->words(3, true),
            'tanggal_masuk' => null,
            'jumlah' => fake()->numberBetween(1, 4),
            'total_biaya' => fake()->numberBetween(1, 4)
        ];
    }
}
