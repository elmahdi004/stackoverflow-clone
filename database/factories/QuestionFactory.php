<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(rand(4,10)),
            'body' => fake()->paragraphs(rand(3,7),true),
            'views' => rand(0,10),
            'answers' => rand(0,10),
            'votes' => rand(-5,10),
            'user_id' => rand(1,10),
            'best_answer_id' => 1
        ];
    }
}
