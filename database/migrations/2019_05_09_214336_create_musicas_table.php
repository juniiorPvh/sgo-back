<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('orquestra_id')->nullable()->index()->unsigned()->comment('Orquestra proprietária da musica.');
            $table->string('name');
            $table->string('tonality')->nullable();
            $table->string('composer')->nullable();
            $table->boolean('publico')->default(0)->comment('Indica se a partitura pode ser visualizada por outras orquestras.');
            $table->string('audio')->nullable();
            $table->longtext('letter')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('orquestra_id')->references('id')->on('orquestras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musicas');
    }
}
