<?php

namespace Database\Seeders;

use App\Models\Rent;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::where('roles_id', 3)->get()->each(function ($user) {
            Rent::factory()->count(5)->for($user)->create();
        });
    }
}
