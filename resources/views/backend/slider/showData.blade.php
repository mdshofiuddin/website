@extends('backend.master')

@section('title','Show Slider')
@section('content')




<div class="card">
    <div class="card-header">
      <h3 class="card-title">Slider List</h3>
      <a href="{{route('create-slider')}}" title="Create a slider" class="btn btn-dark float-right"><i class="fas fa-plus-circle"></i> Create</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
        <tr>
          <th>S.L.</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($sliders as $key=>$slider)
        <tr>
          <td>{{$key + 1}}</td>
          {{-- <td>@php
              echo $about->description;
          @endphp</td> --}}
          <td> <img src="/images/{{$slider->image}}" alt="NO Img" width="250px" height="auto"> </td>

            <td>
                {{-- <a href="{{url('editData/'.$user->id)}}" class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></a> --}}
                <a href="{{url('editSlider/'.$slider->id)}}" title="Click to edit" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a>
                <a href="{{url('deleteSlider/'.$slider->id)}}" title="Click to delete" onclick="return confirm('Are you sure to delete it !!')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
