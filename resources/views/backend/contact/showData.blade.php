@extends('backend.master')

@section('title','Show Contact')
@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Contact List</h3>
      <a href="{{route('create-contact')}}" title="create a contact" class="btn btn-dark float-right"><i class="fas fa-plus-circle"></i> Create</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
        <tr>
          <th>S.L.</th>
          <th>Address</th>
          <th>Contact Us</th>
          <th>Useful Link</th>
          <th>Others Link</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($contacts as $key=>$contact)
        <tr>
          <td>{{$key + 1}}</td>
          <td>
             {{$contact->address}}
          </td>
          <td>
             {{$contact->contacts}}
          </td>
          <td>
             {{$contact->usefullink}}
          </td>
          <td>
             {{$contact->otherslink}}
          </td>

            <td>
                {{-- <a href="{{url('editData/'.$user->id)}}" class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></a> --}}
                <a href="{{url('editContact/'.$contact->id)}}" title="Click to edit" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a>
                <a href="{{url('deleteContact/'.$contact->id)}}" title="Click to delete" onclick="return confirm('Are you sure to delete it !!')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
