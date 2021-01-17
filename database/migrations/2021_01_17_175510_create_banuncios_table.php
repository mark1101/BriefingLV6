<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banuncios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_client');
            $table->string('resume');
            $table->string('to_do');
            $table->string('insta_login');
            $table->string('insta_pass');
            $table->string('face_login');
            $table->string('face_pass');
            $table->string('google_login');
            $table->string('google_pass');
            $table->string('rg_responsible')->default(null);
            $table->string('cnpj');
            $table->string('social_reason');
            $table->string('address');
            $table->string('tel');
            $table->string('email');
            $table->string('email_pass');
            $table->string('payment_prefer')->default(null);
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
