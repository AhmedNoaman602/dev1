<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->title(),
            'tag_id' => Tag::factory(),
            'body' => $this->faker->paragraph(3 , true),
        ];
    }
}
?>