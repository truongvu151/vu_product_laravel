<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
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
    // add product
    public function addProduct()
    {
        $category = Category::all();
        return view('productadd', compact('category')); // category is bien tra ve
    }
    // add product for database
    public function insertProduct(Request $request)
    {
        $messages = [
            'productname.required' => 'Hãy nhập tên sản phẩm!',
            'price.required' => 'Hãy nhập giá sản phẩm!',
        ];
        $rules = [
            'productname' => 'required',
            'price' => 'required',
        ];
        $validator = Validator::make($request->all(), [
            'productname' => 'required',
            'price' => 'required',
        ], $messages)->validate();
        $filename = "";
        if ($request->file('fileUpload')->isValid()) {
            $filename = $request->fileUpload->getClientOriginalName();
            $request->fileUpload->move('images/', $filename);
        }
        $product = Product::create([
            'ProductName' => $request->productname,
            'Unit' => $request->unit,
            'Price' => $request->price,
            'CategoryId' => $request->categories,
            'Img' => $filename
        ]);
        $product = Product::all();
        return view('product', compact('product'));
    }
}
