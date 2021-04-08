<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooBarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //     
        Schema::dropIfExists("foobar");   
        Schema::create("foobar", function(Blueprint $blueprint) {
            $blueprint->id("foobar_id");
            $blueprint->string("name", 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists("foobar");
    }
}
