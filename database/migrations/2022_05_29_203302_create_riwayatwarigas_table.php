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
            $table->bigInteger('user_id')->unsigned();
            $table->date('tanggal_lahir');
            $table->date('tanggal_pilihan');
            $table->bigInteger('caturbekel_id')->unsigned();
            $table->bigInteger('dauh_id')->unsigned();
            $table->integer('pangarasan_id');
            $table->integer('pancasudha_id');
            $table->integer('berpergian_id');
            $table->integer('sandangpangan_id');
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users') ->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('caturbekel_id')->references('id')->on('caturbekels') ->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('dauh_id')->references('id')->on('dauhs') ->onDelete('cascade')->onUpdate('cascade');

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

