<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        DB::table('kelas')->insert([
            ['name'  => 'X PPLG'],
            ['name'  => 'X DKV'],
            ['name'  => 'X AKL'],
            ['name'  => 'X APH'],
            ['name'  => 'X TO'],
            ['name'  => 'XI PPLG'],
            ['name'  => 'XI DKV'],
            ['name'  => 'XI AKL'],
            ['name'  => 'XI APH'],
            ['name'  => 'XI TO'],
            ['name'  => 'XII PPLG'],
            ['name'  => 'XII DKV'],
            ['name'  => 'XII AKL'],
            ['name'  => 'XII APH'],
            ['name'  => 'XII TO'],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
};
