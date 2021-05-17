<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSepetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepet', function (Blueprint $table) {
            $table->integer('sepet_id', true);
            $table->integer('fk_kullanici_id')->index('fk_kullanici_id');
            $table->integer('fk_urun_id')->index('fk_urun_id');
            $table->tinyInteger('sepet_adet');
            $table->string('sepet_promoKodu', 50)->nullable();
            $table->double('sepet_urunFiyat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sepet');
    }
}
