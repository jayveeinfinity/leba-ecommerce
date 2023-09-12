<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class LandingController extends Controller
{
    public function index()
    {
        Inertia::setRootView('layouts/corporate-ui');

        return Inertia::render('Landing/Index');
    }

}
