<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Inventory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::where('roles_id', 3)->get()->each(function ($user) {
            Inventory::factory()->count(2)->for($user)->create();
        });
    }
}
