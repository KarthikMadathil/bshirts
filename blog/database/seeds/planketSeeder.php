<?php

use App\planket;
use Illuminate\Database\Seeder;

class planketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\planket::class,5)->create();
    }
}
