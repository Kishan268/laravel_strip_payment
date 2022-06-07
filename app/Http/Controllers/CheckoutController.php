<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class CheckoutController extends Controller
{
    public function checkout($id)
    {   
    	$productsDetails = Products::where('id',$id)->first();

        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey(env('PUBLIC_KEY'));
        		
		$amount = $productsDetails->price;
		// $amount *= 100;
        $amount1 = (int) $amount* 100;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount1,
			'currency' => 'INR',
			'description' => 'Payment From Kishan',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('checkout.credit-card',compact('intent','amount'));

    }

    public function afterPayment()
    {
        // echo 'Payment Has been Received';
        return redirect('/');
    }
}