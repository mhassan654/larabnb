<?php

namespace Database\Factories;

use App\Models\Bookable;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookableFactory extends Factory
{
    /**
     * The name of the factory's correspondent model
     *
     * @return void
     */
    protected $model = Bookable::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $suffix =[
            'Villa',
            'House',
            'Cottage',
            'Luxury Villa',
            'Cheap Rooms',
            'Luxury Rooms',
            'Fancy rooms'
        ];

            return [
                'title' =>$this->faker->city . ' ' . Arr::random($suffix),
                'description' => $this->faker->paragraph
            ];

    }
}
