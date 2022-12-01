<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'emp_name' => fake()->name(),
            'user_id' => fake()->unique()->randomDigit(),
            'emp_address_1' => fake()->address(),
            'emp_date_join' => fake()->date(),
            'emp_date_left' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'emp_title' => fake()->jobTitle(),
            'emp_salary' => fake()->randomDigitNotZero(),
        ];
    }
}
