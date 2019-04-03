<script type="text/javascript">
        
  $('.sa-remove').click(function () {
     var postId = $(this).data('id');
                swal({
                title: "are u sure?",
                text: "lorem lorem lorem",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger waves-effect waves-light',
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",
                closeOnConfirm: true,
                closeOnCancel: true
                },
                function(){
                    window.location.href = "destroy/" + postId;
                });
            });

    </script>