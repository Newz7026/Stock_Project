<script>

   $('.btn-edit').click(function(){
       var id_return = $(this).attr('data-id-product-edit');
       var id = $(this).attr('data-id-edit');
       var unit = $(this).attr('data-unit-edit');
       var date = $(this).attr('data-date-edit');
       $('#edit_Id_return').val(id_return);
       $('#edit_Id').val(id);
       $('#edit_unit').val(unit);
       $('#edit_date').val(date);
   })



   $('.btn-del').click(function(){
       var name = $(this).attr('data-name-del');
       var id = $(this).attr('data-id-del');
       $('#delete_Id').val(id);
       $('#delete_Name').val(name);
   })

</script>
