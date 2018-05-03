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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->string('password');
            $table->tinyInteger('verified')->unsigned()->default(0)->comment('0 for non verified, 1 for verified');
            $table->string('verification_code')->nullable();
            $table->tinyInteger('role_id')->unsigned()->default(0)->comment('0 for customer, 1 for corporate');
            $table->tinyInteger('is_active')->unsigned()->default(1)->comment('0 inactive, 1 for active');
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
