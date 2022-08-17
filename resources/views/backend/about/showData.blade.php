@extends('backend.master')

@section('title','Show About')
@section('content')




<div class="card">
    <div class="card-header">
      <h3 class="card-title text">About List</h3>
      <a href="{{route('create-about')}}" title="create an about" class="btn btn-dark float-right"><i class="fas fa-plus-circle"></i> Create</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <table id="example1" class="table table-bordered table-striped text-center" style="width: 100%">
        <thead class="text-center">
        <tr>
          <th>S.L.</th>
          <th>Description</th>
          <th style="width: 250px">Picture</th>
          <th style="width: 100px" class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($abouts as $key=>$about)
        <tr>
          <td>{{$key + 1}}</td>
          <td>
            @php
              echo $about->description;
          @endphp</td>
          <td> <img src="/images/{{$about->picture}}" alt="NO Img" width="250px" height="auto"> </td>

            <td>
                {{-- <a href="{{url('editData/'.$user->id)}}" class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></a> --}}
                <a href="{{url('editAbout/'.$about->id)}}" title="Click to edit" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a>
                <a href="{{url('deleteAbout/'.$about->id)}}" title="Click to delete" onclick="return confirm('Are you sure to delete it !!')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
        </td>
        </tr>
        @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

@endsection
