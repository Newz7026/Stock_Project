<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('product-edit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header alert  alert-success">
                    <h5 class="modal-title " id="exampleModalLabel"><strong>Edit Product</strong> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="modal-body">
                        <div class="row ">
                            <div class="col-md ">
                                <div class="mb-3 text-center">
                                    <img class="text-center" id="edit_Img" name='image' width="100px" height="100px">
                                    <input class="form-control mt-5" name="image" id="edit_Img" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-dark"><strong>ID/Barcode
                                            Product</strong> </label>
                                    <input type="hidden" class="form-control" id="edit_Id" name="id_product"
                                        maxlength="13">
                                        <input type="number" class="form-control" id="edit_Barcode" name="barcode_product"
                                        maxlength="13">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label text-dark"> <strong> Name
                                            Product </strong></label>
                                    <input type="text" class="form-control" id="edit_Name" name="name_product"
                                        placeholder="" maxlength="100">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label text-dark"> <strong> Type Product
                                            Product </strong></label>
                                            <select class="form-control" aria-label="Default select example" name="type" id="edit_Type">
                                                @foreach ($type as $data)
                                                    <option value="{{ $data->type_id }}">{{ $data->type_name }}</option>
                                                @endforeach

                                            </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label text-dark"><strong>Cost
                                            Price</strong> </label>
                                    <input type="number" class="form-control" id="edit_Cost" name="cost_product"
                                        placeholder="" maxlength="13">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label text-dark"> <strong>Selling
                                            Price</strong> </label>
                                    <input type="number" class="form-control" id="edit_Sell" name="sell_product"
                                        placeholder="" maxlength="13">
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-dark"><strong>SKU</strong>
                                    </label>
                                    <input type="text" class="form-control" id="edit_Sku" name="sku_product"
                                        placeholder="" maxlength="13">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-dark"><strong>Unit</strong>
                                    </label>
                                    <input type="number" class="form-control" id="edit_Unit" name="unit_product"
                                        placeholder="" maxlength="13">
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
