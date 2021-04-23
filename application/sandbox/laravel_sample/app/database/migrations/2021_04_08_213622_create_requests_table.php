<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->integer("request_by");
            $table->integer("shared_to");
            $table->string("view_shared_request", 250);
            $table->string("view_sent_quote", 250);
            $table->string("edit_approved_sent", 250);
            $table->string("view_all", 250);
            $table->string("update_status_sent", 250);
            $table->integer("shared_by");
            $table->string("inspection_reports");
            $table->string("additional_doc", 5000);
            $table->string("repairs", 250);
            $table->text("property_address");
            $table->string("city", 250);
            $table->string("state", 250);
            $table->string("zip_code", 250);
            $table->text("owner_information");
            $table->text("additional_information");
            $table->text("list_items");
            $table->string("quote", 250);
            $table->integer("assign_to");
            $table->string("approve", 250);
            $table->string("new_approve", 250);
            $table->integer("approve_notifications");
            $table->string("name", 255);
            $table->string("phone", 255);
            $table->string("email", 255);
            $table->date("closing_date");
            $table->date("scheduled_for");
            $table->text("edit_request");
            $table->integer("payment_method");
            $table->string("discount_amount", 250);
            $table->string("discount_code", 250);
            $table->string("new_discount_amount", 250);
            $table->integer("revised");
            $table->string("completed_date", 250);
            $table->string("status", 255);
            $table->integer("new_status_notifications");
            $table->string("new_quote", 250);
            $table->string("decline_reason", 250);
            $table->integer("new_decline_notifications");
            $table->string("selection_type", 250);
            $table->integer("new_request_add");
            $table->integer("new_request_active");
            $table->integer("quote_shared");
            $table->integer("shared_status");
            $table->string("buyers_agent", 250);
            $table->string("seller_agent", 250);
            $table->dateTime("new_date");
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
        Schema::dropIfExists('requests');
    }
}
