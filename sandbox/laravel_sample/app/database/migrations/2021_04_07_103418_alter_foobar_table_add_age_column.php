<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFoobarTableAddAgeColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table("foobar", function(Blueprint $blueprint) {
            $blueprint->bigInteger("age")->unique("inx_unique_foobar_age");
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
        Schema::table("foobar", function(Blueprint $blueprint) {
            $blueprint->dropColumn("age");
        });
    }
}
