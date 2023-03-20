<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->sentence,
            'surname'=>$this->faker->sentence,
            'rank_uz' => $this->faker->sentence,
            'rank_en' => $this->faker->sentence,
            'rank_ru' => $this->faker->sentence,
            'img' => '1675398139-about-1.jpg',
            'telegram' => $this->faker->sentence,
            'facebook' => $this->faker->sentence,
            'instagram' => $this->faker->sentence,
        ];
    }
}
