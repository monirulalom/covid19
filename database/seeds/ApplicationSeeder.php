<?php

use Illuminate\Database\Seeder;
Use App\Application;
use App\Division;
use App\District;
use App\Upazilla;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<50;$i++){

            $faker = \Faker\Factory::create();

            $name = $faker->name;
            $email =$faker->safeEmail;
            $contact = $faker->randomElement(['yes', 'no']);
            $cough = $faker->randomElement(['yes', 'no']);
            $fever = $faker->randomElement(['yes', 'no']);
            $division = $faker->numberBetween(1,8);
            $district = Division::find($division)->district()->pluck('id')->random(1)->first();
            $upazilla = District::find($district)->upazilla()->pluck('id')->random(1)->first();
            $status = $faker->numberBetween(1,5);
            
            $application = new Application();
            $application->name = $name;
            $application->email = $email;
            $application->contact = $contact;
            $application->fever = $fever;
            $application->cough = $cough;
            $application->key = Str::random(6);

            $application->save();

           $application->status()->attach($status);
           $application->division()->attach($division,['district_id' => $district, 'upazilla_id' => $upazilla]);
            
        }
    }
}
