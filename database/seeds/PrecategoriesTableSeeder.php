<?php

use Illuminate\Database\Seeder;

class PrecategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Precategory::class,4)->create();
    }
}
