<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    private $product, $products;
    public function add()
    {
        return view('admin.product.add');
    }

    public function manage()
    {
        $this->products = Product::all();
        return view('admin.product.manage', ['products' => $this->products]);
    }

    public function create(Request $request)
    {
        Product::newProduct($request);
        return redirect('/product/add')->with('message', 'Product Info Save Successfully');
    }
    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('admin.product.edit', ['product' => $this->product]);
    }
    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/product/manage')->with('message', 'Product Updated Successfully');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('/product/manage')->with('message2', 'Product Deleted Successfully');
    }
}
