<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("rep_id");
            $table->string("type");
            $table->string("terms");
            $table->string("price_level");
            $table->string("discount");
            $table->string("class");
            $table->integer("comm_rate");
            $table->string("split_rep");
            $table->integer("split_percent");
            $table->string("qb_listId");
            $table->date("modified_at");
            $table->string("qb_listId_sales_rep");
            $table->string("qb_listId_type");
            $table->string("qb_listId_terms");
            $table->date("estab_at");
            $table->integer("comm_rateYr1");
            $table->integer("comm_rateYr2");
            $table->integer("comm_rateYr3");
            $table->string("currency_listId");
            $table->string("currency_name");
            $table->string("company_name");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
