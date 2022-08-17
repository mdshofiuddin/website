@extends('backend.master')

@section('title','Update Management')
@section('content')



<section class="content">
  <div class="container">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-dark" style="  margin-top: 40px;">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-plus-circle"></i> Create Management</h3>
            <a href="{{route('show-management')}}" title="List of Management" class="btn btn-outline-secondary float-right"><i class="fas fa-list"></i> Management List</a>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          @if ($errors->any())
          <div class="alert text-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
          </div>
          @endif


          {{-- @if(Session::has('update'))
          <p class="alert alert-success verify-alert"> <i class="fas fa-solid fa-circle-check"></i> {{Session::get('update')}}</p>
          @endif --}}

          <form id="quickForm" action="{{url('updateManagement/'.$user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                {{-- <div class="col-md-12"> --}}
                    <div class="row">
                        <div class="col-md-12">


                        <label for="Name" class="text">Name</label>
                        <div class="form-group">
                            <input type="text" name="name" value="{{$user->name}}" class="form-control">
                        </div>
                        <label for="designation" class="text">designation</label>
                        <div class="form-group">
                            <input type="text" name="designation" value="{{$user->designation}}" class="form-control">
                        </div>

                        <label for="Image" class="text">Image</label>
                        <div class="form-group">
                            <input type="file" name="image" value="{{$user->image}}" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
              <button type="submit" class="btn btn-dark">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
        </div>
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-6">

      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>



@endsection

