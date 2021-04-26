<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('type')->nullable();
            $table->string('price');
            $table->string('address');
            $table->text('description');
            $table->json('images');
            $table->string('condition');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('floor')->nullable();
            $table->string('insidesize');
            $table->string('outsidesize');
            $table->json('additionalinfo')->nullable();
            $table->json('expences');
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
        Schema::dropIfExists('listings');
    }
}
