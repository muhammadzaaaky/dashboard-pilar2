<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('minat');
            $table->string('validator');
            $table->string('nama_validator');
            $table->string('wa_validator');
            $table->string('nama_vendor');
            $table->string('nama_driver');
            $table->string('wa_driver');
            $table->string('telepon');
            $table->string('alamat');
            $table->string('ktp');
            $table->string('sim')->nullable();
            $table->string('stnk')->nullable();
            $table->string('kir')->nullable();
            $table->string('armada1')->nullable();
            $table->string('armada2')->nullable();
            $table->string('armada3')->nullable();
            $table->string('nopol')->nullable();
            $table->string('kota')->nullable();
            $table->string('covarage')->nullable();
            $table->string('homebase')->nullable();
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
        Schema::dropIfExists('vendors');
    }
}
