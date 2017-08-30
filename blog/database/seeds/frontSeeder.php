<?php

use App\front;
use Illuminate\Database\Seeder;

class frontSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\front::class,5)->create();
    }
}
