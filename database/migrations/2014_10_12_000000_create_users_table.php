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
            $table->string('surname')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role_id')->default(2);
            $table->text('direction')->nullable();
            $table->text('phone')->nullable();
            $table->string('student_id')->nullable();
            $table->integer('course')->nullable();
            $table->string('study_program')->nullable();
            $table->string('email2')->nullable();
            $table->text('description')->nullable();
            $table->text('addition')->nullable();
            $table->string('bank_account')->nullable();
            $table->text('address')->nullable();
            $table->string('person_code')->nullable();
            $table->boolean('active')->default(0);
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
