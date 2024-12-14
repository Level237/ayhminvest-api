<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentSumPriceController extends Controller
{
    public function sumPayment(){
        $total = Payment::sum('price');

        return $total;

    }
}
