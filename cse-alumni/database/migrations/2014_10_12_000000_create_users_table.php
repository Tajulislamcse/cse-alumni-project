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
            $table->bigIncrements('id');
            $table->integer('alumniId')->nullable();
            $table->string('name');
            $table->string('batch')->nullable();
            $table->string('session')->nullable();
            $table->string('bloodgroup')->nullable();
            $table->string('image')->nullable();
            $table->string('designation')->nullable();
            $table->string('email');
            $table->string('phoneNo')->nullable();
            $table->boolean('status')->default(false);
            $table->string('gender')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
