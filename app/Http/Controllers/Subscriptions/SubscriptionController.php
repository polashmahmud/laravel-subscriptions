<?php

namespace App\Http\Controllers\Subscriptions;

use App\Http\Controllers\Controller;
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
        dd($request->token);
    }
}
