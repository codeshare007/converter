<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function getInvoice() {
        return view("pages.invoice-get");
    }

    public function viewInvoice() {
        return view("pages\invoice-view");
    }
}
