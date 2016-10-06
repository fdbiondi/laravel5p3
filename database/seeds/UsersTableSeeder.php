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
        factory(App\User::class)->create([
            'name' => 'Federico',
            'email' => 'fdbion@gmail.com',
            'password' => bcrypt('11235813'),
        ]);
        factory(App\User::class, 50)->create();
    }
}
