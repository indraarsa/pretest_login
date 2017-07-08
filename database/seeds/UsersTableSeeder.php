<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
		User::create(array(
			'name'     => 'Indra Aries Sandy',
			'username' => 'admin',
			'email'    => 'admin@gmail.com',
			'password' => Hash::make('password'),
		));
    }
}
