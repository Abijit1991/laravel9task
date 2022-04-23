<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = array(
            array(
                'name'=>'User1',
                'email'=>'user1@samplelaravel9.com',
                'type'=>0,
                'password'=> bcrypt('123456')
            ),
            array(
                'name'=>'User2',
                'email'=>'user2@samplelaravel9.com',
                'type'=>1,
                'password'=> bcrypt('123456')
            ),
            array(
                'name'=>'User3',
                'email'=>'user3@samplelaravel9.com',
                'type'=>2,
                'password'=> bcrypt('123456')
            ),
        );

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
