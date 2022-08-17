@extends('backend.master')

@section('title','Update Countdown')
@section('content')



<section class="content">
  <div class="container">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-dark" style="  margin-top: 40px;">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-plus-circle"></i> Update Countdown</h3>
            <a href="{{route('show-coundown')}}" title="List of Countdown" class="btn btn-outline-secondary float-right"><i class="fas fa-list"></i> Countdown List</a>
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

          <form id="quickForm" action="{{url('updateCoundown/'.$user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                {{-- <div class="col-md-12"> --}}
                    <div class="row">
                        <div class="col-md-12">

                        <label for="Picture" class="text">Count One</label>
                        <div class="form-group">

                            <input type="text" name="coundownOne" value="{{$user->coundownOne}}" class="form-control">
                        </div>
                        <label for="Picture" class="text">Count Two</label>
                        <div class="form-group">

                            <input type="text" name="coundownTwo" value="{{$user->coundownTwo}}" class="form-control">
                        </div>
                        <label for="Picture" class="text">Count Three</label>
                        <div class="form-group">

                            <input type="text" name="coundownThree" value="{{$user->coundownThree}}" class="form-control">
                        </div>
                        <label for="Picture" class="text">Count Four</label>
                        <div class="form-group">

                            <input type="text" name="coundownFour" value="{{$user->coundownFour}}" class="form-control">
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

