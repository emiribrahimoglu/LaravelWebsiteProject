<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSatisgecmisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('satisgecmisi', function (Blueprint $table) {
            $table->foreign('fk_kullanici_id', 'satisgecmisi_ibfk_1')->references('kullanici_id')->on('kullanici')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('fk_urun_id', 'satisgecmisi_ibfk_2')->references('urun_id')->on('urun')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('satisgecmisi', function (Blueprint $table) {
            $table->dropForeign('satisgecmisi_ibfk_1');
            $table->dropForeign('satisgecmisi_ibfk_2');
        });
    }
}
