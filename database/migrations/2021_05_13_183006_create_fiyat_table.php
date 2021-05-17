<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiyatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiyat', function (Blueprint $table) {
            $table->integer('fk_urun_id')->primary();
            $table->double('urun_fiyat');
            $table->tinyInteger('urun_indirimDurumu');
            $table->integer('urun_stok');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiyat');
    }
}
