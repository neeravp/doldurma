<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained();
            // $table->foreignId('properties_id')->constrained()->nullable();
            $table->string('name');
            $table->string('family');
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('active')->default(false);
            $table->boolean('lock')->default(false);
            $table->string('avatar_path')->nullable();
            $table->string('cover_path')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('device_id')->nullable();
            $table->string('two_factor_token')->nullable();
            $table->timestamp('two_factor_expiry')->nullable();
            $table->string('session_id')->nullable();
            $table->string('api_token')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}