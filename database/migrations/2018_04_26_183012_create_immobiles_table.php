<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immobiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('immobile_title', 100);
            $table->integer('immobile_code', 11);
            $table->string('immobile_type', 50);
            $table->string('immobile_address_name', 200);
            $table->string('immobile_address_number', 6);
            $table->string('immobile_address_district', 60);
            $table->string('immobile_address_CEP', 10);
            $table->string('immobile_address_city', 60);
            $table->string('immobile_address_state', 60);
            $table->double('immobile_price', 10, 2);
            $table->integer('immobile_area', 11);
            $table->integer('immobile_bedroom', 2);
            $table->integer('immobile_suite', 2);
            $table->integer('immobile_toilet', 2);
            $table->integer('immobile_room', 2);
            $table->integer('immobile_garage', 2);
            $table->string('immobile_description', 300)->nullable;
            $table->string('immobile_image', 100)->nullable;
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
        Schema::dropIfExists('immobiles');
    }
}
