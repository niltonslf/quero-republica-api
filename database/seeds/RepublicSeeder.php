<?php

use Illuminate\Database\Seeder;

class RepublicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Republic::class, 30)->create();
    }
}