<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKullaniciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kullanici', function (Blueprint $table) {
            $table->integer('kullanici_id', true);
            $table->string('kullanici_takmaAd', 50);
            $table->string('kullanici_isim', 50);
            $table->string('kullanici_soyisim', 50);
            $table->string('kullanici_sifre', 100);
            $table->string('kullanici_mail', 100);
            $table->string('kullanici_telNo', 20)->nullable();
            $table->string('kullanici_adres', 150);
            $table->boolean('kullanici_adminDurumu');
            $table->boolean('kullanici_hesapDurumu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kullanici');
    }
}
