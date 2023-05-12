<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
/* use Session; */
use stripe;



class StripePaymentController extends Controller
{
    public function stripe()
    {
        return view('index');
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        /*  Stripe\Charge::create([
            "amount" => 100 * 150,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Making test payment."
        ]); */
        Session::flash('success', 'Payment has been successfully processed.');
        return back();
    }
}