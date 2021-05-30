<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('status', 2)->default(1);
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->uuid('uuid');
            $table->bigInteger('property_id')->nullable();
            $table->decimal('price',12,2)->nullable();
            $table->integer('guest')->nullable();
            $table->integer('total_night')->nullable();
            $table->integer('additional_guest')->nullable();
            $table->decimal('total',12,2)->nullable();
            $table->date('check_in')->nullable();
            $table->date('check_out')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
