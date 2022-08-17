@extends('backend.master')

@section('title','Show Process')

@section('content')

<div class="card">
    <div class="card-header">
        {{-- Modal --}}
      <h3 class="card-title">Work Process List</h3>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-sm btn-dark float-right" title="Create a process" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-plus-circle"></i> Create</button>


      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
         <form action="" method="POST" id="quickForm">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Working Process</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <!-- <form> -->
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Process Name </label>
                            <input type="text" class="form-control process" placeholder="Process Name" id="process" name="process">
                        </div>

                        <!-- </form> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="save" class="btn btn-dark save">Save</button>
                    </div>
                </div>
            </div>

         </form>
      </div>
      <script>
        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            var modal = $(this)
            modal.find('.modal-title').text('Working Process')
            modal.find('.modal-body input').val(recipient)
        })
    </script>
{{-- Modal --}}

      {{-- <a href="{{route('create-process')}}" title="Create a process" class="btn btn-dark float-right"><i class="fas fa-plus-circle"></i> Create</a> --}}
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
        <tr>
          <th>S.L.</th>
          <th>Work Process</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($workProcess as $key=>$process)
        <tr>
          <td>{{$key + 1}}</td>
          <td>
             {{$process->process}}
          </td>


            <td>
                <a href="" data-id="{{$process->id}}" data-toggle="modal" data-target="#updateModal" data-process="{{$process->process}}" title="Click to edit" class="btn btn-sm btn-secondary edit"><i class="fas fa-edit"></i></a>
                {{-- <a href="{{url('editProcess/'.$process->id)}}" title="Click to edit" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a> --}}
                {{-- @method('delete') --}}
                <button type="submit" name="delete_data" title="Click to delete" class="btn btn-sm btn-danger delete_data" data-id="{{$process->id}}"><i class="fas fa-trash"></i></button>
                {{-- <a href="{{url('deleteProcess/'.$process->id)}}" title="Click to delete" onclick="return confirm('Are you sure to delete it !!')" class="btn btn-sm btn-danger delete"><i class="fas fa-trash"></i></a> --}}
        </td>
        </tr>
        @endforeach

        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


  @include('backend.workProcess.js_script')
  @include('backend.workProcess.updateModal')


@endsection
