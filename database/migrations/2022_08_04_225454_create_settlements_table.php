<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettlementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settlements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('settlement_type_id');
            $table->integer('key');
            $table->string('name');
            $table->enum('zone_type',["Rural", "SemiUrbano", "Urbano"]);
            $table->timestamps();

            $table->foreign('settlement_type_id')->references('id')->on('settlement_types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settlements');
    }
}
