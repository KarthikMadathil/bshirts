<?php

use App\cuff;
use Illuminate\Database\Seeder;

class cuffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\cuff::class,5)->create();
    }
}
