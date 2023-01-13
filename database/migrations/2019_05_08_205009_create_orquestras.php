<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrquestras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orquestras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('acronyms')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->string('phone', 15);
            $table->string('photo')->nullable();
            $table->date('dt_end')->nullable(); // para desabilitar a orquestra no sistema
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
        Schema::dropIfExists('orquestras');
    }
}
