@extends('admin.master')
@section('title')
    Add Year
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Year</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item">Add Year</li>
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
                            <h5 class="card-title">View Year</h5>
                        <a href="{{route('year.view')}}" class="btn btn-info float-right"><i class="fa fa-list"></i>View Year</a>
                        </div>
                        <div>
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                        <form action="{{route('year.store')}}" method="POST">
                                                @csrf
                                                <div class="card-body">
                                                    @include('admin.includes.errors')
                                                    <div class="form-group">
                                                        <label for="name">Year Name</label>
                                                        <input type="number" name="name" class="form-control" id="name" placeholder="Enter Year Name">
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
