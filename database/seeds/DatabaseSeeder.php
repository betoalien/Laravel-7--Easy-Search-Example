<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Customers;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 50)->create();  // $this->call(UsersTableSeeder::class);
        $customers = factory(App\Customers::class, 50)->create();  // $this->call(UsersTableSeeder::class);
    }
}
