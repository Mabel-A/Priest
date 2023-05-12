<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    public $amount = 0;

    public function checkout(Request $request)
    {
        $price_items = [];
        $donation_amts = [100, 200, 300, 400, 500];
        $total_donation = 0;

        $this->amount += $request->amount;

        foreach ($donation_amts as $amt) {
            $total_donation += $total_donation;

            $price_items[] = [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'amount',
                    ],
                    'unit_amount' => $request->amount * 100, //price specified in cents
                ],
                'quantity' => 1,
            ]];
        }

        $stripe = new \Stripe\StripeClient(env('STRIPE_KEY'));

        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => $price_items,
            'mode' => 'payment',
            'success_url' => route('checkout.success', [], true),
            'cancel_url' => route('checkout.cancel', [], true),
        ]);

        $donation = new Donation();
        $donation->amount = $request->amount;
        $donation->session_id = $checkout_session->id;
        $donation->save();

        return redirect($checkout_session->url);
    }

    public function success()
    {
        return view('payment.success');
    }

    public function cancel()
    {
        return view('payment.cancel');
    }
}