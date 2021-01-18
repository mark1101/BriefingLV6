<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBgeralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bgerals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('client_id');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('site');
            $table->string('youtube');
            $table->string('blog');
            $table->string('tiktok');
            $table->integer('state_id');
            $table->integer('city_id');
            $table->string('street');
            $table->string('complement');
            $table->string('cnpj');
            $table->string('source');
            $table->string('transparency');
            $table->string('mission');
            $table->string('services');
            $table->string('challenge');
            $table->string('objetive');
            $table->string('differential');
            $table->string('formation');
            $table->string('class');
            $table->string('location');
            $table->string('age');
            $table->string('power');
            $table->string('habits');
            $table->string('resume');
            $table->string('competition');
            $table->string('persona');

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
        Schema::dropIfExists('bgerals');
    }
}
