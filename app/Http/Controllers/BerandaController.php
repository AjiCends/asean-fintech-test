<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BerandaController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('public.beranda.index',compact(
            'categories'
        ));
    }
}
