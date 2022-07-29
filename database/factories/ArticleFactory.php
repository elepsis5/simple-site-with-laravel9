<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence(6, true);
        $slug = Str::substr(Str::lower(preg_replace('/\s+/', '-', $title)), 0, -1);
        return [
            'title' => $title,
            'slug' => $slug,
            'body' => $this->faker->paragraph(100, true),
            'img' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker', true),
            'created_at' => $this->faker->dateTimeBetween('-1 years')

        ];
    }
}
