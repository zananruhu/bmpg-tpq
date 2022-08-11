<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpqs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('profil_tpq');
            $table->text('no_statistik');
            $table->string('slug')->unique();
            $table->string('kelurahan');
            $table->text('alamat');
            $table->foreignId('kecamatan_id');
            $table->foreignId('user_id');
            $table->unsignedBigInteger('no_hp');
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
        Schema::dropIfExists('tpqs');
    }
}
