<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'prj_title'=>fake()->domainName(),
            'prj_st_dte'=>fake()->date(),
            'prj_ed_dte'=>fake()->date($format = 'Y-m-d', $max = 'now'),
            'prj_desc'=>fake()->paragraph(),
            'emp_id'=>fake()->randomDigit(),
        ];
    }
}
