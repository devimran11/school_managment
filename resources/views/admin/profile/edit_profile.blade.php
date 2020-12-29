@extends('admin.master')
@section('title')
    Edit Users
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">User Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item">User Profile</li>
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
                        <div>
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                        <form action="{{route('profile.update', $edit_data->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-body">
                                                    @include('admin.includes.errors')
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                    <input type="text" name="name" class="form-control" id="name" value="{{$edit_data->name}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Email</label>
                                                        <input type="email" name="email" class="form-control" id="name" value="{{$edit_data->email}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Mobile</label>
                                                        <input type="text" name="mobile" class="form-control" id="name" value="{{$edit_data->mobile}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Address</label>
                                                        <input type="text" name="address" class="form-control" id="name" value="{{$edit_data->address}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Gender</label>
                                                        <input type="text" name="gender" class="form-control" id="name" value="{{$edit_data->gender}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Image</label>
                                                        <input type="file" name="image" class="form-control" id="name" value="{{$edit_data->image}}">
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-lg btn-primary">Update</button>
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
