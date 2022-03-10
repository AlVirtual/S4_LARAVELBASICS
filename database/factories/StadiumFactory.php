<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Stadium;

class StadiumFactory extends Factory
{
    
    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Stadium::class
      
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 
            'name' => $this->faker->name(),
            'capacity' => $this->faker->random(),
            
        ];
    }
}
