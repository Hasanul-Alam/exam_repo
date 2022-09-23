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
                                    <th>User Name</th>
                                    <th>Email Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-danger btn-sm">
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

