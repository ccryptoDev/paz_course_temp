<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChapterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => 1,
            'name' => $this->faker->unique()->text(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
