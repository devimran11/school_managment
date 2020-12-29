@extends('admin.master')
@section('title')
    add post
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('all_post')}}">Post List</a></li>
                        <li class="breadcrumb-item">Create Post</li>
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
                                <h3 class="card-title">Create Post</h3>
                                <a href="{{route('all_post')}}" class="btn btn-primary">Go Back to Post List</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12 col-lg-10 offset-lg-1 col-md-8 offset-md-2">
                                    <form action="{{ route('save_post') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            @include('admin.includes.errors')
                                            <div class="form-group">
                                                <label for="title">Post title</label>
                                                <input type="name" name="title" value="{{ old('title') }}" class="form-control" placeholder="Enter title">
                                            </div>
                                            <div class="form-group">
                                                <label for="category">Post Category</label>

                                                <select name="category" id="category" class="form-control">
                                                    <option value="" style="display: none" selected>Select Category</option>
                                                    @foreach($categories as $c)
                                                        <option value="{{ $c->id }}"> {{ $c->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input" id="image">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Choose Post Tags</label>
                                                <div class=" d-flex flex-wrap">
                                                    @foreach($tags as $tag)
                                                        <div class="custom-control custom-checkbox" style="margin-right: 20px">
                                                            <input class="custom-control-input" name="tags[]" type="checkbox" id="tag{{ $tag->id}}" value="{{ $tag->id }}">
                                                            <label for="tag{{ $tag->id}}" class="custom-control-label">{{ $tag->name }}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Description</label>
                                                <div>
                                                    <textarea name="description" id="summernote" rows="10" class="form-control"
                                                              placeholder="Enter description">{{ old('description') }}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
