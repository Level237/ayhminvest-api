<?php

namespace App\Http\Controllers\Api\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
class StripeController extends Controller
{
    public function charge(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $charge = Charge::create([
            'amount' => $request->amount, // Montant en cents
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'Investissement',
        ]);

        return response()->json($charge);
    }
}
