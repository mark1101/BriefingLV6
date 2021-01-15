<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('whats');
            $table->string('name_responsible');
            $table->string('tel');
            $table->string('email');
            $table->string('cnpj');
            $table->string('state_id');
            $table->string('city_id');
            $table->string('address');
            $table->integer('points_hired');
            $table->integer('points');
            $table->string('fundation');
            $table->string('service');
            $table->string('color');
            $table->string('logo');
            $table->integer('active')->default(1);
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
        Schema::dropIfExists('clients');
    }
}
