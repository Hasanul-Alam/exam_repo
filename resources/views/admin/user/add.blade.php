@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center"><h4>Add User Form</h4></div>
                    <div class="card-body">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <form action="{{route('user.new')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3">User Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" value="Create New User">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

