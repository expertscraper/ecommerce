<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(User::class, 1)->create();
        DB::table('users')->delete();
        DB::table('users')->insert([
        	'name' => 'admin',
        	'email' => 'admin@gmail.com', 
        	'password' => Hash::make('admin'), 
       	]);
    }
}
