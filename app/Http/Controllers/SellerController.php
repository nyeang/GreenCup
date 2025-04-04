<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    //
    public function SellerPage()
    {
        return view('seller.sellerpage');
    }
}
