<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $product, $products;
    public function index()
    {
        $this->products = Product::all();
        return view('website.home.index', ['products' => $this->products]);
    }

    public function detail($id)
    {
        $this->product = Product::find($id);
        return view('website.home.detail', ['product' => $this->product]);
    }
}
