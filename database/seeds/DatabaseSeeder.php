<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
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
            'name'     => 'Ivan Mulyawan',
            'username' => 'ultrakill012',
            'email'    => 'topgatling12@gmail.com',
            'password' => Hash::make('123456'),
        ));

    }
}
