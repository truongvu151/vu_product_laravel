<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index()
    {
        $product = Product::all();
        return view('product', compact('product'));
    }

    // chi tiet san pham
    public function getProductDetail($id)
    {
        $product = Product::where('ProductId', $id)->first();
        return view('productdetail', compact('product'));
    }
}
