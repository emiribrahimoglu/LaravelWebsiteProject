<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFiyatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fiyat', function (Blueprint $table) {
            $table->foreign('fk_urun_id', 'fiyat_ibfk_1')->references('urun_id')->on('urun')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fiyat', function (Blueprint $table) {
            $table->dropForeign('fiyat_ibfk_1');
        });
    }
}
