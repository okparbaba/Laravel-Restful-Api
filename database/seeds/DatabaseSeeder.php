<?php

use Illuminate\Database\Seeder;
use App\Model\Product;
use App\Model\Reviews;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Model\Product::class,50)->create();
        factory(App\Model\Reviews::class,300)->create();

    }
}
