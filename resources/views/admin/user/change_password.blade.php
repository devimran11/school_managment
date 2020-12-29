@extends('admin.master')
@section('title')
    All Users
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Change Password</h1>
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
                            <h5 class="card-title">Change Password</h5>
                        <a href="{{route('users.view')}}" class="btn btn-info float-right"><i class="fa fa-list"></i>List User</a>
                        </div>
                        <div>
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                        <form action="{{route('password.store')}}" method="POST">
                                                @csrf
                                                <div class="card-body">
                                                    @include('admin.includes.errors')
                                                    <div class="form-group">
                                                        <label for="name">Current Password</label>
                                                        <input type="password" name="current_password" class="form-control" id="name" placeholder="Enter Your Current Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">New Password</label>
                                                        <input type="password" name="new_password" class="form-control" id="name" placeholder="Enter Your New Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Confirm Password</label>
                                                        <input type="password" name="confirm_password" class="form-control" id="name" placeholder="Enter Confirm Password">
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-lg btn-primary">Change Password</button>
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
