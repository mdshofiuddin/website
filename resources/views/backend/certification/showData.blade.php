@extends('backend.master')

@section('title','Show Certification')
@section('content')




<div class="card">
    <div class="card-header">
      <h3 class="card-title">Certification List</h3>
      <a href="{{route('create-certification')}}" title="create a certification" class="btn btn-dark float-right"><i class="fas fa-plus-circle"></i> Create</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
        <tr>
          <th>S.L.</th>
          {{-- <th>Description</th> --}}
          <th>Image</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($certifications as $key=>$certification)
        <tr>
          <td>{{$key + 1}}</td>
          {{-- <td>@php
              echo $about->description;
          @endphp</td> --}}
          <td> <img src="/images/{{$certification->image}}" alt="NO Img" width="150px" height="auto"> </td>

            <td>
                {{-- <a href="{{url('editData/'.$user->id)}}" class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></a> --}}
                <a href="{{url('editCertification/'.$certification->id)}}" title="Click to edit" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a>
                <a href="{{url('deleteCertification/'.$certification->id)}}" title="Click to delete" onclick="return confirm('Are you sure to delete it !!')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
