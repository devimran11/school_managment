@extends('admin.master')
@section('title')
    All Users
@endsection
@section('content')
    <div class="col-md-4 offset-md-4">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
              src="{{URL::to($user->image)}}"
                     alt="User profile picture">
              </div>
        
              <h3 class="profile-username text-center">{{$user->name}}</h3>
        
              <p class="text-muted text-center">{{$user->address}}</p>
        
              <table width="100%" class="table table-bordered">
                  <tbody>
                      <tr>
                          <td>Mobile Number</td>
                          <td>{{$user->mobile}}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>{{$user->gender}}</td>
                    </tr>
                  </tbody>
              </table>
        
              <a href="{{route('profile.edit')}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
@endsection
