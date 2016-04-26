<?php


class UserTableSeeder extends Seeder
{
        public function run()
        {
            
            $user = new User();
            $user->first_name = $_ENV['USER_FIRST'];
            $user->last_name = $_ENV['USER_LAST'];
            $user->email = $_ENV['USER_EMAIL'];
            $user->password= $_ENV['USER_PASS'];
            $user->role_id = User::ADMIN;
            $user->save();



            $user = new User();
            $user->first_name = 'John';
            $user->last_name = 'Doe';
            $user->email = 'JohnDoe@mail.com';
            $user->password= 'qwerty123';
            $user->role_id = User::STANDARD;
            $user->save();

            
        }
}