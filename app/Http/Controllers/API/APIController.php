<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class APIController extends Controller
{
    private $products;

    public function getLastTenProduct(){
        $this->products = Product::latest()->take(10)->get('id', 'name', 'image', 'selling_price');
        return response()->json($this->products);
    }
}
