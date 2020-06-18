<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = array(
            array('id' => '1','description' => 'Waiting for sample collection'),
            array('id' => '2','description' => 'Sample is being sent to the lab'),
            array('id' => '3','description' => 'Sample test is in progress in the lab'),
            array('id' => '4','description' => 'Corona Positive'),
            array('id' => '5','description' => 'Corona Negative')
          );

          
          foreach($statuses as $status){
            Status::create($status);
        }


    }
}
