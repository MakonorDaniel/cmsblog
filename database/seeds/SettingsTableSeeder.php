<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

            'site_name' => "The Space Lifestyle",
            'address' => 'Victoria Island, Lagos',
            'contact_number' => '08099338534',
            'contact_email' => 'makonordaniel@gmail.com'

        ]);
    }
}
