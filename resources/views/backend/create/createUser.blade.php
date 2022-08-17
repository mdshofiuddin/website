    @extends('backend.master')

    @section('title','Create User')
    @section('content')



    <section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-dark" style="  margin-top: 40px;">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-plus-circle"></i> Create User</h3>
                <a href="{{route('showData')}}" title="List of User" class="btn btn-outline-secondary float-right"><i class="fas fa-list"></i> User List</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {{-- @if ($errors->any())
              <div class="alert text-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
              </div>
              @endif --}}

              {{-- @if(Session::has('msg'))
              <p class="alert alert-success verify-alert"> <i class="fas fa-solid fa-circle-check"></i> {{Session::get('msg')}}</p>
              @endif --}}
              <form id="quickForm" action="{{url('store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    {{-- <div class="col-md-12"> --}}
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                    <label for="exampleInputEmail1" class="text">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputPassword1" class="text">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                        @error('email')
                                            <div class="alert text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                            <div class="form-group">
                                    <label for="exampleInputEmail1" class="text">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputPassword1" class="text">Role</label>
                                        <select class="form-control select2" name="role">
                                            <option selected="selected" value="user">User</option>
                                            <option value="admin">Admin</option>
                                            <option value="super_admin">Super Admin</option>
                                        </select>

                                        {{-- <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> --}}
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                            <div class="form-group">
                                    <label for="exampleInputEmail1" class="text">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputPassword1" class="text">Confirm Password</label>
                                        <input type="password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="exampleInputPassword1" class="text">Image</label>
                                            <input type="file" name="image" class="form-control"  placeholder="">
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

