<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $random = rand(1,1000);
        return [
            'subject' => $this->faker->sentence(7, true),
            'body' => $this->faker->paragraph(3, true),
            'img' => 'https://picsum.photos/id/'. $random . '/50/50',
            'created_at' => $this->faker->dateTimeBetween('-10 month')
        ];
    }
}
