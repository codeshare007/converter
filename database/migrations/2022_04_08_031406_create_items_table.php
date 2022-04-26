<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("item_id");
            $table->string("item");
            $table->string("description");
            $table->double("cost");
            $table->double("price");
            $table->integer("rate");
            $table->double("commission_amount");
            $table->double("stdcost");
            $table->string("rep");
            $table->string("type");
            $table->double("bonus");
            $table->date("modified_at");
            $table->string("qb_listId");
            $table->integer("stdcost_pct");
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
        Schema::dropIfExists('items');
    }
}
