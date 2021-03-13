<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->unsignedBigInteger('campus_id')->nullable();
            $table->unsignedBigInteger('role_id')->default(1);
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();;
            $table->boolean('status')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();;
            $table->string('pass')->nullable();;
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
