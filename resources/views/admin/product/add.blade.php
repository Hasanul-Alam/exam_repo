@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center"><h4>Add Product Form</h4></div>
                    <div class="card-body">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <form action="{{route('product.new')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="category">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Brand Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="brand">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Product Price</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="price">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Product Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" value="Create New Product">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
