<?php

namespace Database\Seeders;

use App\Models\Rent;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        $this->call(AdminSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(InventorySeeder::class);
        $this->call(RentsSeeder::class);

        // cara manggil class seeder
        // bisa juga kayak gini kalo classnya banyak
        // $this->call([
        //     FooSeeder::class,
        //     BarSeeder::class,
        // ]);
        // $this->call(UserSeeder::class);

        // User::factory(10)->create();


    }
}
