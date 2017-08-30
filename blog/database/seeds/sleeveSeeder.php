<?php

use App\sleeve;
use Illuminate\Database\Seeder;

class sleeveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\sleeve::class,5)->create();
    }
}
