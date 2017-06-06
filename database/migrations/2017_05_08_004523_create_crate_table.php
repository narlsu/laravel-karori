<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crates', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('weekly_crate')->default(false);
            $table->boolean('custom_crate')->default(false);
            $table->text('custom_crate_text');
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
        Schema::dropIfExists('crates');
    }
}
