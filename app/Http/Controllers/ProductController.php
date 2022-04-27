<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function all()
    {
        $products = Product::all();
        return response($products);
    }

    public function paginate()
    {
        $products = Product::paginate(2);
        return response($products);
    }

    public function orderBy($param,$ordered)
    {
        if ($ordered == 'asc') {
            $products = Product::orderBy($param,'asc')->get();
        } elseif ($ordered == 'desc') {
            $products = Product::orderBy($param,'desc')->get();
        }else{
            return null;
        }

        return response($products);
    }

    public function category()
    {
        $products = DB::table('products as p')
                        ->join('product_details as pd','pd.product_id','=','p.id')
                        ->join('categories as c','c.id','=','pd.category_id')
                        ->select('p.*','c.name as category')
                        ->get();

        return response($products);
    }
}

