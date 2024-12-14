<?php

namespace App\Http\Controllers\Api\Payment;


use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Charge;
class StripeController extends Controller
{
    public function charge(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try{
            $charge = Charge::create([
                'amount' => $this->calculateRealNumber($request->amount), // Montant en cents
                'currency' => 'eur',
                'source' => $request->stripeToken,
                'description' => 'Investissement',
            ]);
            $payment=new Payment;
            $payment->user_id=Auth::guard("api")->user()->id;
            $payment->price=$request->amount;
            $payment->save();
            return response()->json($charge);
        }catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                'errors' => $e
              ], 500);
        }
    }

    function calculateRealNumber($amount) {
        return (($amount)*100);
    }
}
