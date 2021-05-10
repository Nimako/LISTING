<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Central Columns
            $table->char('status', 2)->default(1);
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            // Table Fields
            $table->uuid('uuid');
            $table->bigInteger('location_id');
            //$table->unsignedBigInteger('property_type_id')->nullable();
            $table->string('room_name')->nullable();
            // $table->string('text_location')->nullable();
            // $table->string('geolocation')->nullable();
            // $table->string('street_address_1')->nullable();
            // $table->string('street_address_2')->nullable();
            // $table->string('postal_code')->nullable();
            // $table->integer('country_id')->nullable();
            // $table->string('city')->nullable();
            // $table->string('area')->nullable();
            // $table->string('contact_name')->nullable();
            // $table->string('email', 255)->nullable();
            // $table->string('primary_telephone')->nullable();
            // $table->string('secondary_telephone')->nullable();
            //$table->text('about_us')->nullable();
            //$table->string('website', 255)->nullable();
            $table->text('summary_text')->nullable();
            //$table->text('nearby_locations')->nullable();
            $table->char('serve_breakfast', 3)->nullable();
            $table->char('free_cancellation', 3)->nullable();
            $table->string('languages_spoken', 255)->nullable();
            $table->text('bed_name')->nullable();
            $table->integer('total_guest_capacity')->nullable();
            $table->integer('total_bathrooms')->nullable();
            $table->integer('num_of_rooms')->nullable(); //bed size
            //$table->string('images_ids', 255)->nullable();
            $table->text('featured_image')->nullable();
            $table->text('images_paths')->nullable();
            $table->text('amenities')->nullable();

            //$table->integer('num_of_floors')->nullable();
            //$table->string('current_onboard_stage')->nullable();
            // Foreign Keys
            //$table->foreign('property_type_id')->references('id')->on('property_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
