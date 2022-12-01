<?php

namespace Database\Factories;

use App\Models\Workdiary;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workdiary>
 */
class WorkdiaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //            $table->integer('emp_id');
            //            $table->integer('prj_id');
            //            $table->text('description');
            'wd_emp_id'=>fake()->unique()->randomDigit(),
            'wd_prj_id'=>fake()->randomDigit(),
            'wd_description'=>fake()->paragraph(),
        ];
    }
}
