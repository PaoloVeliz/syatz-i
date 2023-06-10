<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->integer('age');
            $table->text('description');
            $table->integer('status');
            $table->text('phone-number');
            $table->timestamps();
        });

        Schema::create('pets_photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pet_id')->nullable();
            $table->unsignedBigInteger('photo_id')->nullable();
            $table->timestamps();

            $table->foreign('pet_id')->references('id')->on('pets');
            $table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('pets_vaccines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pet_id')->nullable();
            $table->unsignedBigInteger('vaccine_id')->nullable();
            $table->timestamps();

            $table->foreign('pet_id')->references('id')->on('pets');
            $table->foreign('vaccine_id')->references('id')->on('vaccines')->onDelete('cascade')->onUpdate('cascade');
        });


        Schema::create('pets_diseases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pet_id')->nullable();
            $table->unsignedBigInteger('disease_id')->nullable();
            $table->timestamps();

            $table->foreign('pet_id')->references('id')->on('pets');
            $table->foreign('disease_id')->references('id')->on('diseases')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('pets_attitudes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pet_id')->nullable();
            $table->unsignedBigInteger('attitude_id')->nullable();
            $table->timestamps();

            $table->foreign('pet_id')->references('id')->on('pets');
            $table->foreign('attitude_id')->references('id')->on('attitudes')->onDelete('cascade')->onUpdate('cascade');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
        Schema::dropIfExists('pets');
    }
};
