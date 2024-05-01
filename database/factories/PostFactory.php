<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'is_published' => $this->faker->boolean(),
            'likes' => $this->faker->randomNumber(),
            'main_image' => $this->faker->imageUrl(360, 360, 'animals',),
            'preview_image' => $this->faker->imageUrl(360, 360, 'animals', true, 'cats'),
            'category_id' => 1
        ];
    }
}
