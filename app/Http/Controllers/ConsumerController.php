<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsumerController extends Controller
{
    //
    public function ConsumerPage()
    {
        return view('consumer/consumerpage');
    }
}
