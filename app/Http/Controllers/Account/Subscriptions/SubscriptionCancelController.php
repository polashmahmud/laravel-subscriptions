<?php

namespace App\Http\Controllers\Account\Subscriptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionCancelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('account.subscriptions.cancel');
    }

    public function store(Request $request)
    {
        $this->authorize('cancel', $subscription = $request->user()->subscription('default'));

        $subscription->cancel();

        return redirect()->route('account.subscriptions');
    }
}
