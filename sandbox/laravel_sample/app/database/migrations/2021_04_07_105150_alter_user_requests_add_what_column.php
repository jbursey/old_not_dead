<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserRequestsAddWhatColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table("user_requests", function(Blueprint $blueprint){
            $blueprint->string("what_req", "500");
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
        Schema::table("user_requests", function(Blueprint $blueprint) {
            $blueprint->dropColumn("what_req");
        });
    }
}
