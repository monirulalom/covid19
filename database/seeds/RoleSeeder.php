<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
            array('id' => '1','name' => 'admin'),
            array('id' => '2','name' => 'medical'),
            array('id' => '3','name' => 'govadmin'),
          );

          
          foreach($roles as $role){
            \App\Role::create($role);
        }
        $user = \App\User::findOrFail(1);
        $user->roles()->sync('1');

        $user = \App\User::findOrFail(2);
        $user->roles()->sync('1');

        $user = \App\User::findOrFail(3);
        $user->roles()->sync('2');

        $user = \App\User::findOrFail(4);
        $user->roles()->sync('3');
    }
}
