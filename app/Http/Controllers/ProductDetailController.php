<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function all()
    {
        $productDetails = ProductDetail::all();

        return response($productDetails);
    }
}
