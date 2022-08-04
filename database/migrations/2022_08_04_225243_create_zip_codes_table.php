<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zip_codes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('federal_entity_id');
            $table->unsignedBigInteger('municipality_id');
            $table->unsignedBigInteger('settlement_id');
            $table->string('zip_code');
            $table->string('locality')->nullable();
            $table->timestamps();

            $table->foreign('federal_entity_id')->references('id')->on('federal_entities');
            $table->foreign('municipality_id')->references('id')->on('municipalities');
            $table->foreign('settlement_id')->references('id')->on('settlements');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zip_codes');
    }
}
