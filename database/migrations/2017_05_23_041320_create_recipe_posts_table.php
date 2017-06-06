<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 70);
            $table->text('content');
            $table->string('image');
            $table->string('alt_text', 300)->nullable();
            $table->integer('users_id')->unsigned();

            $table  ->foreign('users_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

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
        Schema::dropIfExists('recipe_posts');
    }
}
