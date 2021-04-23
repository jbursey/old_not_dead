<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_tasks', function (Blueprint $table) {
            $table->id();
            $table->integer("category_id");
            $table->integer("sub_category_id");
            $table->string("task", 510);
            $table->string("task_labor", 255);
            $table->string("task_material", 255);
            $table->string("task_detail", 255);        
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
        Schema::dropIfExists('manage_tasks');
    }
}
