<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('ci')->unique();
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->bigInteger('phone');
            $table->string('address');
            $table->integer("number_Credit_Card");
            $table->integer("number_CVV");
            $table->string("date_Card");
            $table->string('username');
            $table->string('password');
            $table->timestamp('Email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('clientes');
    }
}
