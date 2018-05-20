<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lend', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inventory_id');
            $table->integer('lent_by');
            $table->string('lent_to');
            $table->string('lent_till')->nullable();
            $table->string('number');
            $table->string('email');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('lend');
    }
}
