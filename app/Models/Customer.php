<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "rep_id", "type", "terms", "price_level", "discount", "class", "comm_rate",
        "split_rep", "split_percent", "qb_listId", "modified_at", "qb_listId_sales_rep", 
        "qb_listId_type", "qb_listId_terms", "estab_at", "comm_rateYr1", "comm_rateYr2", "comm_rateYr3",
        "currency_listId", "currency_name", "company_name"
    ];

    protected $hidden = [];
}
