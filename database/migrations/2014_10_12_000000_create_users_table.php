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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('applied_position')->nullable();
            $table->string('id_card')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('marital_status')->nullable();
            $table->text('address_origin')->nullable();
            $table->text('address_now')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('related_person')->nullable();
            $table->string('willing_travel')->nullable();
            $table->bigInteger('expected_salary')->nullable();
            $table->text('skills')->nullable();
            $table->string('signed_place')->nullable();
            $table->date('signed_date')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
