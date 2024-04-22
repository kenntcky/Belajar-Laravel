<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    function route($category = null, $id = null)
    {
        return view('shop.marketplace', ['productCategory' => $category, 'productId' => $id]);
    }
}
