<?php

class UsersTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name' => 'Willy',
            'username' => 'lighter',
            'email' => 'test@gmail.com',
            'password' => Hash::make('awesome'),
        ));
    }
    
}
