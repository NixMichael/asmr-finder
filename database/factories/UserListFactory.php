<?php

namespace Database\Factories;

use App\Models\UserList;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class UserListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'video_id' => $this->faker->word()
        ];
    }
}
