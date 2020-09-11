<?php

use Illuminate\Database\Seeder;

class CEOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CEO::class , 50 )->create();
    }
}
