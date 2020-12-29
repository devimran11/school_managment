@extends('admin.master')
@section('title')
    add fee amount
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add fee Amount</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('fee_amount.view')}}">View Fee Amount</a></li>
                        <li class="breadcrumb-item">Add Fee Amount</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="add_item">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Add Fee Amount</h3>
                                    <a href="{{ route('fee_amount.view') }}" class="btn btn-primary">Go Back to View Fee</a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="add_item">
                                    <div class="row">
                                        <div class="col-12 col-lg-8 offset-lg-2 col-md-12">
                                            <form action="{{ route('fee.amount.store') }}" method="POST">
                                                @csrf
                                                <div class="card-body">
                                                    @include('admin.includes.errors')
                                                    <div class="form-row">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="form-group">
                                                                        <label for="add_class">Fee Category</label>
                                                                        <select name="fee_category_id" id="fee_category_id" class="form-control">
                                                                            <option disabled="" selected="">Select Fee Amount</option>
                                                                            @foreach($data['fee_categories'] as $fee_category)
                                                                                <option value="{{$fee_category->id}}">{{$fee_category->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="add_class">Class</label>
                                                                        <select name="class_id[]" id="class_id" class="form-control">
                                                                            <option disabled="" selected="">Select Class</option>
                                                                            @foreach($data['classes'] as $class)
                                                                                <option value="{{$class->id}}">{{$class->class_name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="amount">Amount</label>
                                                                        <input type="text" name="amount[]" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1" style="padding-top: 32px">
                                                                    <div class="form-group">
                                                                        <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
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

        </div>
    </div>
    <div class="" style="visibility: hidden">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                <div class="form-row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="add_class">Class</label>
                                    <select name="class_id[]" id="class_id" class="form-control">
                                        <option disabled="" selected="">Select Class</option>
                                        @foreach($data['classes'] as $class)
                                            <option value="{{$class->id}}">{{$class->class_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="text" name="amount[]" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-1" style="padding-top: 32px">
                                <div class="form-group">
                                    <div class="form-row">
                                        <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                                        <span class="btn btn-success removeeventmore"><i class="fa fa-minus-circle"></i></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            var counter = 0;
            $(document).on("click",".addeventmore", function () {
                var whole_extra_item_add = $("#whole_extra_item_add").html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click",".removeeventmore",function (event) {
                $(this).closest(".delete_whole_extra_item_add").remove();
                counter-=1;
            });
        })
    </script>
@endsection
