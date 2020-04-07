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
        Schema::create('service_cliente', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idService')->unsigned();
            $table->bigInteger('idCliente')->unsigned();
            $table->dateTime('Date');
            $table->foreign('idService')->references('id')->on('services');
            $table->foreign('idCliente')->references('id')->on('clientes'); 
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
        Schema::dropIfExists('service_cliente');
    }
}
