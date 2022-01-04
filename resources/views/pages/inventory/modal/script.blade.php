<script>
    $('.btn-view').click(function(){
       var id = $(this).attr('data-id');
       var barcode = $(this).attr('data-barcode');
       var name = $(this).attr('data-name');
       var img = $(this).attr('data-img');
       var type = $(this).attr('data-type');
       var unit = $(this).attr('data-unit');
       var cost  = $(this).attr('data-cost');
       var sell = $(this).attr('data-sell');
       var sku = $(this).attr('data-sku');
       $('#view_Id').val(id);
       $('#view_Barcode').val(barcode);
       $('#view_Name').val(name);
       $('#view_Img').attr('src','storage/product/'+img);
       $('#view_Unit').val(unit);
       $('#view_Type').val(type);
       $('#view_Cost').val(cost);
       $('#view_Sell').val(sell);
       $('#view_Sku').val(sku);
       console.log(barcode,type);
   })

   $('.btn-edit').click(function(){
       var id = $(this).attr('data-id-edit');
       var img = $(this).attr('data-img-edit');
       var unit = $(this).attr('data-unit-edit');
       var date = $(this).attr('data-date-edit');
       $('#edit_Id').val(id);
       $('#edit_date').val(date);
       $('#edit_Img').attr('src','storage/product/'+img)
       $('#edit_Unit').val(unit);
       console.log(type);
   })



   $('.btn-del').click(function(){
       var id_product = $(this).attr('data-id-product');
       var id = $(this).attr('data-id');
       var name = $(this).attr('data-name');
       var status = $(this).attr('data-status');
       $('#delete_Id').val(id);
       $('#delete_Id_product').val(id_product);
       $('#delete_Name').val(name);
       $('#delete_Status').val(status);
       // console.log(id,name,status);
   })
</script>
