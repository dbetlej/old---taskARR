<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Dudes;

class DudesFactory extends Factory
{
    protected $model = Dudes::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'login' => $this->faker->name(),
            'email' => $this->faker->email(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password            
            'remember_token' => Str::random(10),
            'VIP' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
