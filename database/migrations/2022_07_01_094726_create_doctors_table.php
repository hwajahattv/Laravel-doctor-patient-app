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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();

        $table->unsignedBigInteger('user_id')->nullable();
        // $table->dropForeign(['user_id']);
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('gender')->nullable();
            $table->date('dateOfBirth')->nullable();
            $table->string('designation')->nullable();
            $table->string('specialization')->nullable();
            $table->string('department')->nullable();
            $table->string('profilePicture')->nullable();
            $table->bigInteger('fee')->nullable();
            $table->string('licenseNumber')->nullable()->unique();
            $table->string('nicNumber')->nullable();
            $table->string('mobileNumber')->nullable();
            $table->string('qualification')->nullable();
            $table->string('institutionOfQualification')->nullable();
            $table->string('institutionOfService')->nullable();
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
        Schema::dropIfExists('doctors');
    }
};
