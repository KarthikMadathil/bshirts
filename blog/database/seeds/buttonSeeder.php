<?php

use App\button;
use Illuminate\Database\Seeder;

class buttonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\button::class,5)->create();
    }
}
