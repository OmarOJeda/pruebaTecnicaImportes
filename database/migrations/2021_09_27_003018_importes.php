<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Importes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('importes', function (Blueprint $table) {
            $table->id();
            $table->string('contrato');
            $table->string('iva');
            $table->string('importe');
            $table->string('anticipo');
            $table->string('enrogacion');
            $table->string('cincoMillar');
            $table->string('dosMillar');
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
        Schema::dropIfExists('importes');
    }
}
