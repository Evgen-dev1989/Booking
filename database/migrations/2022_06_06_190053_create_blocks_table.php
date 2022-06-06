<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id')->default();
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->integer('freeBlocks')->nullable();
            $table->integer('temperature')->nullable();
            $table->integer('volume')->nullable();
            $table->integer('shelfLife')->nullable();
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
        Schema::dropIfExists('blocks');
    }
}
