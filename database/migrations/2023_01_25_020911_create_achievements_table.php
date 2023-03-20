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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('title_uz')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('img')->nullable();
            $table->string('comment_uz')->nullable();
            $table->string('comment_en')->nullable();
            $table->string('comment_ru')->nullable();
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
        Schema::dropIfExists('achievements');
    }
};
