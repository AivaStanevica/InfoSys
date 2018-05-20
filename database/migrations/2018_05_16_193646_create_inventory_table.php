<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('units')->default(1);
            $table->string('description')->nullable();
            $table->boolean('additional')->default(0);
            $table->integer('storage_id');
            $table->string('type')->nullable();
            $table->boolean('avaliable')->default(1);
            $table->decimal('price', 6,2)->nullable();
            $table->integer('lent_to')->nullable();
            $table->integer('project_id')->nullable();
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
        Schema::dropIfExists('inventory');
    }
}
