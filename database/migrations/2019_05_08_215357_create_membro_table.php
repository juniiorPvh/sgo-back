<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('orquestra_id')->index()->unsigned();
            $table->integer('papel_id')->index()->unsigned();
            $table->integer('user_id')->index()->unsigned();
            $table->integer('instrumento_id')->nullable()->index()->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('orquestra_id')->references('id')->on('orquestras');
            $table->foreign('papel_id')->references('id')->on('papeis');
            $table->foreign('instrumento_id')->references('id')->on('instrumentos');

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membros');
    }
}
