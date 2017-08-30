<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        // $this->call(productSeeder::class);
        // $this->call(frontSeeder::class);
        $this->call(CollarSeeder::class);
        // $this->call(cuffSeeder::class);
        // $this->call(buttonSeeder::class);
        // $this->call(planketSeeder::class);
        // $this->call(pocketSeeder::class);
        // $this->call(sleeveSeeder::class);
    }
}
