<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceivePaymentRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_payment_requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("payment_id");
            $table->date("modified_at");
            $table->string("txn_number");
            $table->string("customer_name",);
            $table->string("ar_account");
            $table->date("txn_date");
            $table->string("ref_number");
            $table->double("amount");
            $table->string("payment_method");
            $table->double("unused_payment");
            $table->double("unused_credits",);
            $table->integer("exchange_rate");
            $table->string("app_txn_id");
            $table->string("app_txn_type");
            $table->date("app_txn_date");
            $table->string("app_refnumber");
            $table->double("app_balance_remaining",);
            $table->double("app_amount");
            $table->double("app_discount_amount");
            $table->boolean("processed");
            $table->string("customer_list_id");
            $table->date("processed_at",);
            $table->integer("comm_track_type");
            $table->string("txn_id");
            $table->string("ar_account_qb_list_id");
            $table->string("payment_method_qb_list_id",);
            $table->string("deposit_to_account_qb_list_id");
            $table->string("app_discount_account_qb_list_id");
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
        Schema::dropIfExists('receive_payment_requests');
    }
}
