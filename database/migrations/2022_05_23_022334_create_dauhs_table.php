<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDauhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dauhs', function (Blueprint $table) {
            $table->id();
            $table->string('saptawara');
            $table->string('siang_a');
            $table->string('siang_b');
            $table->string('siang_c');
            $table->string('siang_d');
            $table->string('siang_e');
            $table->string('malam_a');
            $table->string('malam_b');
            $table->string('malam_c');
            $table->string('malam_d');
            $table->string('malam_e');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dauhs');
    }
}
