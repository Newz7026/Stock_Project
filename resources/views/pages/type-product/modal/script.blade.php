<script>
    $('.btn-edit').click(function(){
        var id_edit = $(this).attr('data-id-edit');
        var name_edit = $(this).attr('data-name-edit');
        $('#edit_Id_type').val(id_edit);
        $('#edit_Name_type').val(name_edit);
        console.log(id_edit,name_edit);
    })

 $('.btn-del').click(function(){
        var id = $(this).attr('data-id');
        var name = $(this).attr('data-name');
        $('#delete_Id_type').val(id);
        $('#delete_Name_type').val(name);
        console.log(id,name);
    })
</script>
