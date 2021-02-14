<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [   
            'fullname'  => $this->faker -> name,
            'email'     => $this->faker -> unique()->safeEmail,  
            'phone'     => $this->faker -> numberBetween($min = 310100000, $max = 320200000), 
            'birthdate' => $this->faker -> dateTimeBetween($startDate = '1960', $endDate = '1999', $timezone = null),   
            'photo'     => $this->faker -> imageUrl('/storage/app/public/imgs', $width = 150, $height = 150),
            'role'      => 'Editor', 
            'email_verified_at' => now(),
            'password'  => bcrypt('editor'),            
            'remember_token' => Str::random(10),

                 
        ];
    }
}


