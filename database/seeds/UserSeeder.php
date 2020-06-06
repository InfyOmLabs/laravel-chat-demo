<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Mitul Golakiya',
                'email' => 'mtl.golakiya@gmail.com',
                'password' => 'mypassword',
            ],
            [
                'name' => 'Ankit Kalathiya',
                'email' => 'ankit.kalathiya@infyom.com',
                'password' => 'mypassword',
            ],
            [
                'name' => 'Vishal Ribdiya',
                'email' => 'vishal.ribdiya@infyom.com',
                'password' => 'mypassword',
            ],
            [
                'name' => 'Shailesh Ladumor',
                'email' => 'shailesh.ladumor@infyom.com',
                'password' => 'mypassword',
            ],
            [
                'name' => 'Ajay Makwana',
                'email' => 'ajay.makwana@infyom.com',
                'password' => 'mypassword',
            ]
        ];

        foreach ($users as $userInput) {
            $user = new User($userInput);
            $user->save();
        }
    }
}
