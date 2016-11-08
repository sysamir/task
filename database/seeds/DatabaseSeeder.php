<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       DB::table('users')->insert([

         'name'=>'task',
         'email'=>'task@task.az',
         'password'=>Hash::make('1234'),

         ]);
     }
}
