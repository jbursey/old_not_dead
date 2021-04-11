<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_subcategories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("sub_category_id");
            $table->bigInteger("category_id");
            $table->integer("user_id");
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
        Schema::dropIfExists('task_subcategories');
    }
}
