@extends('backend.master')

@section('title','Show management')
@section('content')




<div class="card">
    <div class="card-header">
      <h3 class="card-title">Management Board</h3>
      <a href="{{route('create-management')}}" title="Create management" class="btn btn-dark float-right"><i class="fas fa-plus-circle"></i> Create</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
        <tr>
          <th>S.L.</th>
          <th>Name</th>
          <th>Designation</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($managements as $key=>$management)
        <tr>
          <td>{{$key + 1}}</td>

          <td>@php
              echo $management->name;
          @endphp</td>
          <td>@php
              echo $management->designation;
          @endphp</td>

          <td> <img src="/images/{{$management->image}}" alt="NO Img" width="250px" height="auto"> </td>
          {{-- <td> <img src="/images/{{$management->image}}" alt="NO Img" width="75 px" height="50 px"> </td> --}}

            <td>
                {{-- <a href="{{url('editData/'.$user->id)}}" class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></a> --}}
                <a href="{{url('editManagement/'.$management->id)}}" title="Click to edit" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a>
                <a href="{{url('deleteManagement/'.$management->id)}}" title="Click to delete" onclick="return confirm('Are you sure to delete it !!')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
