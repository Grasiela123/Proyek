<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        return view('payment');
    }
    public function paymentS(Request $request)
    {
        return view('paymentsuccess');
    }
}

