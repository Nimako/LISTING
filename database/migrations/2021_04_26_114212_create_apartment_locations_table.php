<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_locations', function (Blueprint $table) {
            $table->id();
            $table->string("uuid");
            $table->string("slug")->nullable();
            $table->string("apartmentName")->nullable();
            $table->string("location")->nullable();
            $table->text("heading")->nullable();
            $table->text("description")->nullable();
            $table->text("thingToDo")->nullable();
            $table->text("bannerImage")->nullable();
            $table->text("locationImages")->nullable();
            $table->text("attractionImages")->nullable();
            $table->text("featuredImage")->nullable();
            $table->text("thumbnail")->nullable();
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
        Schema::dropIfExists('apartment_locations');
    }
}
