<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractor', function (Blueprint $table) {
            $table->id();
            $table->string("insurance_reports", 255);
            $table->string("request_by", 255);
            $table->integer("bonds");
            $table->string("name", 255);
            $table->string("business_name", 255);
            $table->string("license_number", 255);
            $table->string("phone", 255);
            $table->string("email", 255);
            $table->string("property_address", 255);
            $table->string("zip_code", 255);
            $table->string("city", 255);
            $table->string("state", 255);
            $table->integer("approve");
            $table->string("insurance_date", 255);
            $table->string("bonds_date", 255);            
            $table->timestamps();
            $table->engine = "MyISAM";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contractor');
    }
}
