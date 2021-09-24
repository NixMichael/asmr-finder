<?php

namespace Database\Factories;

use App\Models\WatchList;
use Illuminate\Database\Eloquent\Factories\Factory;

class WatchListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WatchList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'video_id' => $this->faker->word(),
        ];
    }
}
