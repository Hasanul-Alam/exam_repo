@extends('admin.master')

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header"><h4 class="text-center">All Product Info</h4></div>
                    <div class="card-body">
                        <h5 class="text-center text-success">{{ Session::get('message') }}</h5>
                        <h5 class="text-center text-danger">{{ Session::get('message2') }}</h5>
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Product Name</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category}}</td>
                                <td>{{$product->brand}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    <img src="{{asset($product->image)}}" alt="" height="60" width="70">
                                </td>
                                <td>{{$product->description}}</td>
                                <td>
                                    <a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('product.delete', ['id' => $product->id]) }}" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
