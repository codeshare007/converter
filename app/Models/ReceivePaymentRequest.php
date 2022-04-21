<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceivePaymentRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        "payment_id", "modified_at", "txn_number", "customer_name",
        "ar_account", "txn_date", "ref_number", "amount", "payment_method", "unused_payment", "unused_credits",
        "exchange_rate", "app_txn_id", "app_txn_type", "app_txn_date", "app_refnumber", "app_balance_remaining",
        "app_amount", "app_discount_amount", "processed", "customer_list_id", "processed_at",
        "comm_track_type", "txn_id", "ar_account_qb_list_id", "payment_method_qb_list_id",
        "deposit_to_account_qb_list_id", "app_discount_account_qb_list_id"
    ];
    
    protected $hidden = [];
    
}
