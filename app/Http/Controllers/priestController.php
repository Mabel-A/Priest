<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class priestController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function contact()
    {
        return view('contact');
    }
    public function event()
    {
        return view('event');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function sermon()
    {
        return view('sermon');
    }

    public function donate()
    {
        $donation_amts = [100, 200, 300, 400, 500];

        return view('payment', ['donation_amts' => $donation_amts]);
    }
}