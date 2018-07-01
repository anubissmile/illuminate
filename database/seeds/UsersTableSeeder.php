<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert(
        	[
	            'name' => str_random(10),
	            'surname' => str_random(10),
	            'password' => app('hash')->make('yourpassword'),
        	],
        	[
	            'name' => str_random(10),
	            'surname' => str_random(10),
	            'password' => app('hash')->make('yourpassword2'),
        	]
        );
    }
}
