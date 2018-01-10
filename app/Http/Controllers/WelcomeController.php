<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class WelcomeController extends Controller
{
    // Test Class
    public function index()
    {
        return view::make('welcome.index');
    }

}
