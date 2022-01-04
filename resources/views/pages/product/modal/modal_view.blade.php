<!-- Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header alert alert-info">
          <h5 class="modal-title " id="exampleModalLabel"> <strong>Show Product</strong> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row ">
                <div class="col-md ">
                    <div class="mb-3 text-center">
                        {{-- <label for="formFile" class="form-label text-dark"><strong>image</strong> </label> --}}
                        <img id="view_Img" width="100px" height="100px">
                    </div>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label text-dark"><strong>ID/Barcode
                            Product</strong> </label>
                        <input type="number" class="form-control" id="view_Barcode"  maxlength="13" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label text-dark"> <strong> Name
                            Product </strong></label>
                        <input type="text" class="form-control" id="view_Name" name="name_product"
                            placeholder="" maxlength="100" disabled>
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label text-dark"> <strong> Type Product
                                Product </strong></label>
                                <input type="text" class="form-control" id="view_Type" disabled>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label text-dark"><strong>Cost Price</strong> </label>
                        <input type="number" class="form-control" id="view_Cost"
                            name="cost_product" placeholder="" maxlength="13" disabled>
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label text-dark"> <strong>Selling
                            Price</strong> </label>
                        <input type="number" class="form-control" id="view_Sell"
                            name="sell_product" placeholder="" maxlength="13" disabled>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label text-dark"><strong>SKU</strong>
                        </label>
                        <input type="text" class="form-control" id="view_Sku" name="sku_product"
                            placeholder="" maxlength="13" disabled>
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label text-dark"><strong>Unit</strong>
                        </label>
                        <input type="number" class="form-control" id="view_Unit" name="unit_product"
                            placeholder="" maxlength="13" disabled>
                    </div>
                </div>

            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-rose" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
