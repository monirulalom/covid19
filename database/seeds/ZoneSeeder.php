<?php

use Illuminate\Database\Seeder;
use App\Zone;
use App\Division;
use App\District;
use App\Upazilla;
use App\Area;
use Faker\Generator as Faker;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zones = array(
            array('id' =>'1','name' =>'Green'),
            array('id' =>'2','name' =>'Yellow'),
            array('id' =>'3','name' =>'Red'),
            array('id' =>'4','name' =>'Lockdown'),
        );

        foreach($zones as $zone){
            Zone::Create($zone);
        }

        for($i=1;$i<=15; $i++){

            $faker = \Faker\Factory::create();

            $area = new  Area();

            $area->division_id = $faker->numberBetween(1,8);
    
            $area->district_id = Division::find($area->division_id)->district()->pluck('id')->random(1)->first();
    
            $area->upazilla_id = District::find($area->district_id)->upazilla()->pluck('id')->random(1)->first();

            // $area->zone_id = $faker->numberBetween(1,5);

            $area->save();


            $area->zone()->attach($faker->numberBetween(1,4));
    

            
            

        }


    
    }
}
