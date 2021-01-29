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
            $table->string('twitter');
            $table->string('blog');
            $table->string('tiktok');
            $table->string('origem');
            $table->string('history');
            $table->string('source');
            $table->string('transparency');
            $table->string('proposito');
            $table->string('mission');
            $table->string('services');
            $table->string('vision');
            $table->string('slogan');
            $table->string('challenge');
            $table->string('objetive');
            $table->string('meta');
            $table->string('differential');
            $table->string('sex');
            $table->string('formation');
            $table->string('class');
            $table->string('location');
            $table->string('age');
            $table->string('power');
            $table->string('habits');
            $table->string('resume');
            $table->string('competitionD');
            $table->string('competitionI');
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
