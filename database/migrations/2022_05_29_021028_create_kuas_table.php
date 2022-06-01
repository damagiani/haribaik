<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuas', function (Blueprint $table) {
            $table->id();
            $table->integer('angka');
            $table->text('sifat');
            $table->text('kekurangan');
            $table->text('saran');
            $table->text('lambang');
            $table->text('warna');
            $table->text('arah');
            $table->text('penjelasanarah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuas');
    }
}
