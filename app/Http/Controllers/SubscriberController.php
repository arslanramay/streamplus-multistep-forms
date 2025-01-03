<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;

class SubscriberController extends Controller
{
    /**
     * List all the registered Users/Subscribers
     *
     * @return void
     */
    public function index()
    {
        $subscribers = Subscriber::with('address', 'payment')->get(); // Load related Address and Payment data

        return view('subscribers-list', compact('subscribers'));
    }
}
