<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscrowInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escrow_info', function (Blueprint $table) {
            $table->id();
            $table->integer("request_id")->default(null);
            $table->integer("user_id")->default(null);
            $table->text("company_name");
            $table->text("seller_name");
            $table->text("semail");
            $table->text("point_of_contact");
            $table->text("phone");
            $table->text("email");
            $table->date("closing_date");
            $table->string("escrow_number", 255);
            $table->string("pdf", 250);
            $table->timestamps();
            $table->engine = "InnoDB";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escrow_info');
    }
}
