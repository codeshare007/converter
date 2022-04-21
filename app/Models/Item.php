<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        "item", "description", "cost", "price", "rate", "commission_amount", "stdcost",
        "rep", "type", "bonus", "modified_at", "qb_listId", "stdcost_pct"
    ];

    protected $hidden = [];
}
