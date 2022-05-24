<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatwarigasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayatwarigas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->date('tanggal_pilihan');
            $table->bigInteger('caturbekel_id')->unsigned();
            $table->bigInteger('dauh_id')->unsigned();
            $table->timestamps();

            $table->foreign('caturbekel_id')->references('id')->on('caturbekels') ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dauh_id')->references('id')->on('dauhs') ->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayatwarigas');
    }
}

