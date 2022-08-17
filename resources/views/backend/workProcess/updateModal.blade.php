
    <div class="card-body">
        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel">
            <form action="" method="POST" id="updateForm">
               @csrf
               <input type="hidden" class="form-control up_id" id="up_id" name="up_id">
               <div class="modal-dialog" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h4 class="modal-title" id="exampleModalLabel">Update Working Process</h4>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       </div>
                       <div class="modal-body">
                           <!-- <form> -->
                           <div class="form-group">
                               <label for="recipient-name" class="col-form-label">Process Name </label>
                               <input type="text" class="form-control up_process" placeholder="Process Name" id="up_process" name="up_process">
                           </div>

                           <!-- </form> -->
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           <button type="submit" name="update" class="btn btn-dark update">Update</button>
                       </div>
                   </div>
               </div>

            </form>
         </div>

    </div>

<script>
    $('#updateModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var modal = $(this)
        modal.find('.modal-title').text('Update Working Process')
        modal.find('.modal-body input').val(recipient)
    })
</script>
