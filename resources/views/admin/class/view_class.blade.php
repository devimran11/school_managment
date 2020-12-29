@extends('admin.master')
@section('title')
    View Class
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">View Class</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item">Manage Setup</li>
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
                            <a href="{{route('user.add')}}" class="btn btn-info float-right"><i class="fa fa-plus-circle"></i>Add Class</a>
                        </div>
                        <div>
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">SL</th>
                                            <th>Class Name</th>
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1?>
                                        @if($view_classes->count() > 0)
                                            @foreach($view_classes as $view_class)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$view_class->class_name}}</td>
                                                    <td class="d-flex">
                                                        <a class="btn btn-info btn-sm mr-1" href="">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a class="btn btn-success btn-sm mr-1" href="{{route('class.edit',$view_class->id)}}">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a class="btn btn-danger btn-sm mr-1" id="delete" href="{{route('class.delete',$view_class->id)}}">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5">
                                                    <h5 style="text-align: center;color: red">No Categories Found Here</h5>
                                                </td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
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

