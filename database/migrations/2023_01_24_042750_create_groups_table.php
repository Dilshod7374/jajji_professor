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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('img')->nullable();
            $table->string('title_uz')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('age')->default('3-6');
            $table->integer('seat')->nullable();
            $table->string('course_time')->nullable();
            $table->string('payment')->nullable();
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
        Schema::dropIfExists('groups');
    }
};
