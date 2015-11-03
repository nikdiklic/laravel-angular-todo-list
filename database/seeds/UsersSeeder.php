<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
    	    [
    	    	"email"=>"admin@laravel-test.dev",
    	    	"password"=> bcrypt("admin"),
    	    	"first_name"=>"adminko",
    	    	"last_name"=>"adminovic",
    	    	"company"=>"vivify",
    	    	"country_id"=> 1
			],
			[
    	    	"email"=>"nikola@laravel-test.dev",
    	    	"password"=>bcrypt("123"),
    	    	"first_name"=>"nikola",
    	    	"last_name"=>"diklic",
    	    	"company"=>"vivify",
    	    	"country_id"=> 2
			],
			[
    	    	"email"=>"random@laravel-test.dev",
    	    	"password"=>bcrypt("abc"),
    	    	"first_name"=>"randomir",
    	    	"last_name"=>"randomanovic",
    	    	"company"=>"vivify",
    	    	"country_id"=> 3
			],
    	];


        foreach ($users as $user) {
        	User::create($user);
        }
    }
}
