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
        $random = rand(1,1000);
        return [
            'title' => $title,
            'slug' => $slug,
            'body' => $this->faker->paragraph(100, true),
            'img' => 'https://picsum.photos/id/'. $random . '/200/100',
            'created_at' => $this->faker->dateTimeBetween('-1 years')

        ];
    }
}
