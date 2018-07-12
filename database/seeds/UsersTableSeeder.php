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
        $user = App\User::create([

            'name' => 'makonor',
            'email' => 'makonor@gmail.com',
            'password' => makonor,
            'admin' => 1

        ]);

        App\Profile::create([

            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/fine.png',
            'about' => 'Some about me text',
            'facebook' => 'https://www.facebook.com/',
            'youtube' => 'https://www.youtube.com/'

        ]);
    }
}
