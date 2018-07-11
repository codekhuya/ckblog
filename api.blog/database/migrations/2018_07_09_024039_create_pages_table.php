<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->longtext('body')->nullable();
            $table->boolean('published')->default(0);
            $table->unsignedInteger('user_id')->nullable();   
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('pages', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDetele('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
