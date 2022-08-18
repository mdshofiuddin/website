@extends('backend.master')

@section('title','Show User')
@section('content')




<div class="card">
    <div class="card-header">
      <h3 class="card-title">User List</h3>
      <a href="{{route('create')}}" title="Create a  User" class="btn btn-dark float-right"><i class="fas fa-plus-circle"></i> Create</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
        <tr>
          <th>S.L.</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Role(s)</th>
          <th>Image</th>
          {{-- <th>Image</th> --}}
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $key=>$user)
        <tr>
          <td>{{$key + 1}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->phone}}</td>
          <td>{{$user->role}}</td>
          <td><img src="/images/{{($user)->image}}" alt="NO Img" width="150px" height="auto"></td>
          {{-- <td> <img src="/images/{{$user->image}}" alt="NO Img" width="70px" height="70px"> </td> --}}

            <td>
                {{-- <a href="{{url('editData/'.$user->id)}}" class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></a> --}}
                <a href="{{url('editData/'.$user->id)}}" title="Click to edit" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a>
                <a href="{{url('deleteData/'.$user->id)}}" title ='Click to delete' onclick="return confirm('Are you sure to delete it !!')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
        </td>
        </tr>
        @endforeach

        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

@endsection
