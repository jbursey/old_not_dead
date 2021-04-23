<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoteTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_tasks', function (Blueprint $table) {
            $table->id();
            $table->integer("serial_no");
            $table->integer("request_id");
            $table->string("task", 255);
            $table->string("task_labor", 255);
            $table->string("task_material", 255);
            $table->text("task_detail");
            $table->integer("created_by");
            $table->integer("revised");
            $table->string("taskref", 255);
            $table->integer("task_id");
            $table->integer("category_id");
            $table->integer("sub_category_id");
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
        Schema::dropIfExists('quote_tasks');
    }
}
