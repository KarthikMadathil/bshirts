<?php

use Illuminate\Database\Seeder;

class CollarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\collar::class,5)->create();
    }
}
