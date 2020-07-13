<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->integer('slug1')->default(0);
            $table->integer('slug2')->default(0);
            $table->integer('slug3')->default(0);
            $table->integer('slug4')->default(0);
            $table->integer('slug5')->default(0);
            $table->index(['slug1','slug2','slug3','slug4','slug5']);
            $table->string("body");
            $table->string("css");
            $table->string("js");
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
        Schema::dropIfExists('post');
    }
}
