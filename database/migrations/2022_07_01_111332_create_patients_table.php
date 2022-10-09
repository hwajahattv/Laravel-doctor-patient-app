<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
                    $table->unsignedBigInteger('user_id')->nullable();
                    $table->foreign('user_id')->references('id')->on('users');
                    $table->string('name');
                    $table->string('email');
                    $table->string('gender')->nullable();
                    $table->date('dateOfBirth')->nullable();
                    $table->string('profilePicture')->nullable();
                    $table->bigInteger('credit')->nullable();
                    $table->string('nicNumber')->nullable();
                    $table->string('insuranceCompany')->nullable();
                    $table->string('insuranceNumber')->nullable();
                    $table->string('mobileNumber')->nullable();
                    $table->string('address')->nullable();
                    $table->string('city')->nullable();
                    $table->string('country')->nullable();
                    $table->string('religion')->nullable();
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
        Schema::dropIfExists('patients');
    }
};
