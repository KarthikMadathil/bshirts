<?php

use App\pocket;
use Illuminate\Database\Seeder;

class pocketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\pocket::class,5)->create();
    }
}
