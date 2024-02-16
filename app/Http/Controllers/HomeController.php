<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::latest()->take(5)->get();
        $latestEvents = Event::latest()->first();

        return view(
            'pages.index',
            compact(
                'events',
                'latestEvents'
            )
        );
    }
}
