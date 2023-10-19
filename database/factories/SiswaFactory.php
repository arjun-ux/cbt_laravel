<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jenis_kelamin = fake()->randomElement(['laki-laki','perempuan']);
        return [
            'email' => fake()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role_id' => 3,
            'name' => fake()->name($jenis_kelamin),
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => fake()->address(),
            'tgl_lahir' => fake()->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
