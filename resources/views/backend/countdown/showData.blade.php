@extends('backend.master')

@section('title','Show Countdown')
@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Countdown</h3>
      <a href="{{route('create-coundown')}}" title="List of Countdown" class="btn btn-dark float-right"><i class="fas fa-plus-circle"></i> Create</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
        <tr>
          <th>S.L.</th>
          <th>Count One</th>
          <th>Count Two</th>
          <th>Count Three</th>
          <th>Count Four</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($countdowns as $key=>$countdown)
        <tr>
          <td>{{$key + 1}}</td>
          <td>
             {{$countdown->coundownOne}}
          </td>
          <td>
             {{$countdown->coundownTwo}}
          </td>
          <td>
             {{$countdown->coundownThree}}
          </td>
          <td>
             {{$countdown->coundownFour}}
          </td>

            <td>
                {{-- <a href="{{url('editData/'.$user->id)}}" class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></a> --}}
                <a href="{{url('editCoundown/'.$countdown->id)}}" title="Click to edit" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a>
                <a href="{{url('deleteCoundown/'.$countdown->id)}}" title="Click to delete" onclick="return confirm('Are you sure to delete it !!')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
