<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
        * collect() => menerima data "array of array", untuk membuat collection data.
        *           contohnya mirip Model::get() / Model::all(), returnnya collection
        * each() => fungsinya sama kayak foreach, tapi dia menerima closure function.
        *           lalu menggunakan "method chain", data dari collect di transfer
        *           ke closure, lalu di terima variable dalam case ini '$users'.
        * User::create() => create model user secara "mass assignment", jadi keynya
        *                  harus masuk di fillable modelnya.
        */

        collect([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'roles_id' => '1'
            ],
            [
                'name' => 'guru',
                'email' => 'guru@gmail.com',
                'password' => Hash::make('password'),
                'roles_id' => '1'
            ],

        ])->each(function ($users) {
            User::create($users);
        });
    }
}
