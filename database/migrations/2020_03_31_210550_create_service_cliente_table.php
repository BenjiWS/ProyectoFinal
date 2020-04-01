<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceCliente', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idService')->unsigned();
            $table->bigInteger('idCliente')->unsigned();
            $table->timestamps();
            $table->foreign('idService')->references('id')->on('services');
            $table->foreign('idCliente')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serviceCliente');
    }
}
