<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoryarticles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('c_name_article')->unique();
            $table->string('c_slug_article')->index();
            $table->string('c_avatar_article')->nullable();
            $table->integer('c_hot_article')->default(0)->index();
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
        Schema::dropIfExists('categoryarticles');
    }
}
