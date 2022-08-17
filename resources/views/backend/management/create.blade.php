@extends('backend.master')

@section('title','Create Management')
@section('content')



<section class="content">
  <div class="container">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-dark" style="  margin-top: 40px;">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-plus-circle"></i> Create Management Description</h3>
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

          {{-- @if(Session::has('msg'))
          <p class="alert alert-success verify-alert"> <i class="fas fa-solid fa-circle-check"></i> {{Session::get('msg')}}</p>
          @endif --}}
          <form id="quickForm" action="{{url('store-management')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">

                        <label for="Name" class="text">Name</label>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                        <label for="Designation" class="text">Designation</label>
                        <div class="form-group">
                            <input type="text" placeholder="Designation" name="designation" class="form-control">
                        </div>

                        <label for="Image" class="text">Image</label>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    </div>
                    </div>

            <div class="card-footer text-center">
              <button type="submit" class="btn btn-dark">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
        </div>
      <!--/.col (left) -->

    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>



@endsection

