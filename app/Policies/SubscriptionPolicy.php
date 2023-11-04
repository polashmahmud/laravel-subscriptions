<?php

namespace App\Policies;

use App\Models\User;
use Laravel\Cashier\Subscription;

class SubscriptionPolicy
{
    public function cancel(User $user, Subscription $subscription): bool
    {
        return !$subscription->canceled();
    }

    public function resume(User $user, Subscription $subscription): bool
    {
        return $subscription->canceled();
    }
}
