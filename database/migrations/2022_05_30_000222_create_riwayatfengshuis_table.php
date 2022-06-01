<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatfengshuisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayatfengshuis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('jeniskelamin');
            $table->integer('tahun_lahir');
            $table->bigInteger('kua_id');
            $table->bigInteger('shio_id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayatfengshuis');
    }
}
