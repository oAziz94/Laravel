<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
        	'name' => 'Nathan',
        	'email' => str_random(12).'@email.com',
        	'password' => bcrypt('yourPassword'),
        	'created_at' => new DateTime,
        	'updated_at' => new DateTime,
        ],
        [
        	'name' => 'Khokha',
        	'email' => str_random(12).'@email.com',
        	'password' => bcrypt('yourPassword'),
        	'created_at' => new DateTime,
        	'updated_at' => new DateTime,
        ],
        [
        	'name' => 'Kholoud',
        	'email' => str_random(12).'@email.com',
        	'password' => bcrypt('yourPassword'),
        	'created_at' => new DateTime,
        	'updated_at' => new DateTime,
        ],
        ]);
    }
}
