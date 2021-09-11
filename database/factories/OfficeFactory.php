<?php

namespace Database\Factories;

use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class OfficeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Office::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'title'=>$this->faker->sentence,
            'description'=>$this->faker->paragraph,
            'lat'=>$this->faker->latitude,
            'lng'=>$this->faker->longitude,
            'address_line1'=>$this->faker->address,
            'approval_status'=>Office::APPROVAL_APPROVED,
            'hidden'=>false,
            'price_per_day'=>$this->faker->numberBetween(1.000 - 2.000),
            'monthly_discount'=>0
        ];
    }
}