<?php

namespace App\Http\Controllers\Subscriptions;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(Request $request)
    {
        return view('subscriptions.checkout', [
            'intent' => $request->user()->createSetupIntent()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'token' => 'required'
        ]);

        $plan = Plan::where('slug', $request->plan)
            ->orWhere('slug', 'monthly')
            ->first();

        $request->user()->newSubscription('default', $plan->stripe_id)
            ->create($request->token);

        return back();
    }
}
