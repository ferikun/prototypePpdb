<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Akun;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Akun>
 */
class AkunFactory extends Factory
{
    /**
     * Define the model's default state.
     * prote
     *
     * @return array<string, mixed>
     */

    protected $model = Akun::class;


    public function definition()
    {
        return [
            //
            "role" => $this->faker->randomElement($role = array("siswa","admin")),
            "username" => $this->faker->userName(),
            "fullName" =>$this->faker->name(),
            "email" => $this->faker->email(),
            "password" => bcrypt('12345')
        ];
    }
}
