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
        Schema::create('crate', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->enum('weekly_crate', ['yes', 'no']);
            $table->enum('custom_crate', ['yes', 'null']);
            $table->text('custom_crate_text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crate');
    }
}
