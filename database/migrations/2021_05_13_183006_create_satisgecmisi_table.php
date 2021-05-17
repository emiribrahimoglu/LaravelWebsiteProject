<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatisgecmisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satisgecmisi', function (Blueprint $table) {
            $table->integer('satis_id', true);
            $table->integer('fk_kullanici_id')->index('fk_kullanici_id');
            $table->integer('fk_urun_id')->index('fk_urun_id');
            $table->double('urun_fiyat');
            $table->dateTime('satis_tarihi');
            $table->string('satis_adres', 150);
            $table->string('satis_yontemi', 20);
            $table->tinyInteger('satis_adet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('satisgecmisi');
    }
}
