<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pc_devices', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->longText('description');
            $table->string('price');
            $table->string('image');
            $table->integer('quantity');
            $table->tinyInteger('popular');
            $table->string('date');
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
        Schema::dropIfExists('pc_devices');
    }
};
