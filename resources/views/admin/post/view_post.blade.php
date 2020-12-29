@extends('admin.master')
@section('title')
    view post
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">View Post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('all_post')}}">Post List</a></li>
                        <li class="breadcrumb-item">View Post</li>
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
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">View Post</h3>
                                <a href="{{route('all_post')}}" class="btn btn-primary">Go Back to Post List</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th width="200px">Image</th>
                                                <td><img src="{{url($view_post->image)}}" width="250" height="250"></td>
                                            </tr>
                                            <tr>
                                                <th width="200px">Description</th>
                                                <td>{{$view_post->description}}</td>
                                            </tr>
                                            <tr>
                                                <th width="200px">Title</th>
                                                <td>{{$view_post->title}}</td>
                                            </tr>
                                            <tr>
                                                <th width="200px">Slug</th>
                                                <td>{{$view_post->slug}}</td>
                                            </tr>
                                            <tr>
                                                <th width="200px">Tag Name</th>
                                                <td>
                                                    @foreach($view_post->tags as $tag)
                                                        <span class="badge badge-primary">{{$tag->name}}</span>
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="200px">Category Name</th>
                                                <td>{{$view_post->category->name}}</td>
                                            </tr>
                                            <tr>
                                                <th width="200px">Author Name</th>
                                                <td>{{$view_post->user->name}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
