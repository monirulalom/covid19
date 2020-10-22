<?php

use Illuminate\Database\Seeder;
use App\Hospital;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    










    public function run()
    {
        $hospitals = array(
            array('id' => '1','name' => "Kuwait Bangladesh Friendship Government Hospital",'email' => 'km@example.com','address' => 'Dhaka' ),
            array('id' => '2','name' => "Kurmitola General Hospital",'email' => 'kbfg@example.com','address' => 'Dhaka' ),
            array('id' => '3','name' => "National Chest Infectious Diseases Hospital",'email' => 'ncidh@example.com','address' => 'Dhaka' ),
            array('id' => '4','name' => "Dhaka Medical College Hospital",'email' => 'dmch@example.com','address' => 'Dhaka' ),
            array('id' => '5','name' => "Bangladesh Railway Hospital",'email' => 'brh@example.com','address' => 'Dhaka' ),
            array('id' => '6','name' => "Mohanagar General Hospital",'email' => 'mgh@example.com','address' => 'Dhaka' ),
            array('id' => '7','name' => "Sheikh Russel Gastro Liver Institute & Hospital",'email' => 'srhih@example.com','address' => 'Dhaka' ),
            array('id' => '8','name' => "Sajida Foundation Hospital",'email' => 'sfh@example.com','address' => 'Dhaka' ),
            array('id' => '9','name' => "Mirpur Maternity Hospital",'email' => 'mmh@example.com','address' => 'Dhaka' ),
            array('id' => '10','name' => "Jinjira Specialized Hospital",'email' => 'jsh@example.com','address' => 'Dhaka' ),
            array('id' => '11','name' => "Amin Bazar Hospital",'email' => 'abh@example.com','address' => 'Dhaka' ),
            array('id' => '12','name' => "Kamrangirchar Hospital",'email' => 'kh@example.com','address' => 'Dhaka' )
        );
        foreach($hospitals as $hospital){
            Hospital::create($hospital);
        }
    }
}
