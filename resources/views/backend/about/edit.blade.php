@extends('backend.master')

@section('title','Update User')
@section('content')



<section class="content">
  <div class="container">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-dark" style="  margin-top: 40px;">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-plus-circle"></i> Update User</h3>
            <a href="{{route('show-about')}}" title="List of About" class="btn btn-outline-secondary float-right"><i class="fas fa-list"></i> About List</a>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          @if ($errors->any())
          <div class="alert">
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

          <form id="quickForm" action="{{url('updateAbout/'.$user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                {{-- <div class="col-md-12"> --}}
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                                <label for="exampleInputEmail1" class="text">Title</label>
                                    <input type="text"  name="title" class="form-control">{{$user->title}}
                                </div>
                                <label for="exampleInputEmail1" class="text">Description</label>
                                    <textarea id="summernote" rows="60" name="description" class="form-control">{{$user->description}}
                                    </textarea>
                        </div>
                        <label for="Picture" class="text">Picture</label>
                        <div class="form-group">

                            <input type="file" name="picture" value="{{$user->picture}}" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
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

