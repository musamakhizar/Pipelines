<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    
    
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2),
            'active' =>random_int(0,1),
        ];
    }
}
