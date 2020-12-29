@extends('admin.master')
@section('title')
    All Users
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">User List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item">User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User List</h5>
                        <a href="{{route('users.view')}}" class="btn btn-info float-right"><i class="fa fa-list"></i>List User</a>
                        </div>
                        <div>
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                        <form action="{{route('users.store')}}" method="POST">
                                                @csrf
                                                <div class="card-body">
                                                    @include('admin.includes.errors')
                                                    <div class="form-group">
                                                        <label for="name">User Role</label>
                                                        <select name="usertype" id="usertype" class="form-control">
                                                            <option disabled="" selected="">Select Your Option</option>
                                                            <option value="Admin">Admin</option>
                                                            <option value="User">User</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Email</label>
                                                        <input type="email" name="email" class="form-control" id="name" placeholder="Enter email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Password</label>
                                                        <input type="password" name="password" class="form-control" id="name" placeholder="Enter password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Confirm Password</label>
                                                        <input type="password" name="confirm_password" class="form-control" id="name" placeholder="Enter Confirm Password">
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
