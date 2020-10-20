<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Application;
use App\Division;
use App\District;
use App\Upazilla;
use Faker\Generator as Faker;

$factory->define(Application::class, function (Faker $faker) {
    $name = $this->faker->name;
    $email = $this->faker->safeEmail;
    $contact = $this->faker->randomElement(['yes', 'no']);
    $cough = $this->faker->randomElement(['yes', 'no']);
    $fever = $this->faker->randomElement(['yes', 'no']);
    $division = $this->faker->numberBetween(1,8);
    $district = Division::find($division)->district()->pluck('id')->random(1)->first();
    $upazilla = District::find($district)->upazilla()->pluck('id')->random(1)->first();
    $status = $this->faker->numberBetween(1,5);
    return [
        'name' => $name,
        'email' => $email,
        'contact' => $contact,
        'fever' =>$fever,
        'cough' => $cough,
        'division' =>$division,
        'district' =>$district,
        'upazilla' => $upazilla,
        'status' => $status,
    ];
});
