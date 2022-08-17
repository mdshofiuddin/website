<script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


// ------------------------------------------------Insert Data-----------------------------------------------------------
$(function(){
    $(document).on('click','.save',function(e){
        e.preventDefault();

        let process = $('.process').val();

        $.ajax({
            url: "{{route('store-process-modal')}}",
            method: 'post',
            data: {process:process},
            success: function(res){
                if(res.status=='success'){
                    $('#exampleModal').modal('hide');
                    $('#quickForm')[0].reset();
                    $('.table').load(location.href+' .table');

                    $.notify(res.msg,{globalPosition:'top right',className:'success'});

                }
            },error: function(err){
                let error = err.responseJSON();
                console.log(error);
            }
        })

    })
});

// --------------------------------------------------- End of Insertion------------------------------------

// ------------------------------------------------Update Data-----------------------------------------------------------
$(function(){
    $(document).on('click','.edit',function(){

        let id = $(this).data('id');
        let process = $(this).data('process');

        $('#up_process').val(process);
        $('#up_id').val(id);

        // Update save

        $(document).on('click', '.update',function(e){
            e.preventDefault();
            let up_process = $('#up_process').val();
            let up_id = $('#up_id').val();

        $.ajax({
            url: "{{route('updateProcessAjax')}}",
            method: 'post',
            data: {up_process:up_process,up_id:up_id},
            success: function(res){
                if(res.status=='success'){
                    $('#updateModal').modal('hide');
                    $('#updateForm')[0].reset();
                    $('.table').load(location.href+' .table');
                    $.notify(res.msg,{globalPosition:'top right',className:'success'});
                }
            },error: function(err){
                let error = err.responseJSON();
                console.log(error);
            }
        });

        });

    });
});

// --------------------------------------------------- End of Update------------------------------------


// --------------------------------------------------- Delete------------------------------------
$(function(){
    $(document).on('click','.delete_data',function(e){
        // e.preventDefault();
        let delete_id = $(this).data('id');
        if(!confirm('Are you sure to delete!!')){
            return false;
        }
        $.ajax({
            url: "{{route('deleteProcess')}}",
            method: 'post',
            data: {delete_id:delete_id},
            success: function(res){
                if(res.status=='success'){
                    $('.table').load(location.href+' .table');
                    $.notify(res.msg,{globalPosition:'top right',className:'success'});
                }
            },error: function(err){
                let error = err.responseJSON();
                console.log(error);
            }
        })

    });
});

// ---------------------------------------------------End Delete------------------------------------

</script>
