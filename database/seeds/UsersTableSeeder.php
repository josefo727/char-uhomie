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
        User::create([
        	'name' => 'JoseC',
        	'email' => 'josec@uhomie.com',
        	'password' => bcrypt('123123')
        ]);

        User::create([
            'name' => 'JoseG',
            'email' => 'joseg@uhomie.com',
            'password' => bcrypt('123123')
        ]);

        User::create([
            'name' => 'QuintinS',
            'email' => 'quintins@uhomie.com',
            'password' => bcrypt('123123')
        ]);
    }
}
