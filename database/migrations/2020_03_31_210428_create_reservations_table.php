<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idRoom')->unsigned();
            $table->bigInteger('idCliente')->unsigned();
            $table->dateTime('starDate');
            $table->dateTime('endDate');
            $table->string('type');
            $table->string('state');
            $table->integer('penalty');
            $table->string('username');
            $table->string('password');
            $table->boolean('stateUsername');
            $table->timestamps();
            $table->foreign('idRoom')->references('id')->on('rooms');
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
        Schema::dropIfExists('reservations');
    }
}
