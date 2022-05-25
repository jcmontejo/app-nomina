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
            $table->string('name');
            $table->string('strLastName')->nullable();
            $table->string('strAddres')->nullable();
            $table->string('intPhoneNumber')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('strPasswordText')->nullable();
            $table->bigInteger('dblCatTypeUser')->nullable();
            $table->foreign('dblCatTypeUser')->references('dblCatTypeUser')->on('tblCatTypeUser');
            $table->bigInteger('dblCatBranch')->nullable();
            $table->foreign('dblCatBranch')->references('dblCatBranch')->on('tblCatBranch');
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
