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
        Schema::create('humans', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_ru')->nullable();
            $table->integer('number_id')->nullable();
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
        Schema::dropIfExists('humans');
    }
};
