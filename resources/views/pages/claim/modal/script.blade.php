<script>

   $('.btn-edit').click(function(){
       var id_claim = $(this).attr('data-id-claim-edit');
       var id = $(this).attr('data-id-edit');
       var name = $(this).attr('data-name-edit');
       var sku = $(this).attr('data-sku-edit');
       var unit = $(this).attr('data-unit-edit');
       var date = $(this).attr('data-date-edit');
       var note = $(this).attr('data-note-edit');
       $('#edit_Id_claim').val(id_claim);
       $('#edit_Id').val(id);
       $('#edit_name').val(name);
       $('#edit_sku').val(sku);
       $('#edit_unit').val(unit);
       $('#edit_date').val(date);
       $('#edit_note').val(note);
   })



   $('.btn-del').click(function(){
       var name = $(this).attr('data-name-del');
       var id = $(this).attr('data-id-del');
       $('#delete_Id').val(id);
       $('#delete_Name').val(name);
   })

</script>
