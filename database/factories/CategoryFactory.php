<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'                   => User::factory()->create(),
            'title'                     => $this->faker->title,
            'post_type'                 => false,
            'published'                 => false,
            'selected_for_app'          => false,
            'selected_for_intermediate' => false,
            'is_breaking_news'          => false,
            'confirmed'                 => false,
            'private'                   => false,
            'password'                  => Hash::make('secret'),
            'scheduled'                 => false,
            'published_date_time'       => null,
            'featured_image'            => null
        ];
    }
}