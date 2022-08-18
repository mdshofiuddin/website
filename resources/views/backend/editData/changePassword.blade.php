{{-- @extends('backend.master')

@section('title','Update User')
@section('content')

<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-dark" style="  margin-top: 40px;">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-plus-circle"></i> Update User</h3>
            <a href="{{route('showData')}}" title="List of User" class="btn btn-outline-secondary float-right"><i class="fas fa-list"></i> User List</a>
          </div>

          @if ($errors->any())
          <div class="alert text-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
          </div>
          @endif

          <form id="quickForm" action="{{url('updatePassword/'.$user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="text">New Password</label>
                                <input type="password"  name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="exampleInputEmail1" class="text">Confirm Password</label>
                                <input type="password"  name="password_confirmation" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>
            </div>

            <div class="card-footer text-center">
              <button type="submit" class="btn btn-dark">Submit</button>
            </div>
          </form>
        </div>

        </div>

      <div class="col-md-6">

      </div>

    </div>

  </div>
</section>

@endsection
 --}}
