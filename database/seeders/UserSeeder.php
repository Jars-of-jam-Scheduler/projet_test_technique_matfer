<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
			[
				'name' => 'A Developer',
				'email' => 'a_dev@gmail.com',
				'password' => Hash::make('password'),
				'role' => 'developer'
			], 
			[
				'name' => 'A Customer',
				'email' => 'a_customer@gmail.com',
				'password' => Hash::make('password'),
				'role' => 'customer'
			]
        ]);

		
    }
}
