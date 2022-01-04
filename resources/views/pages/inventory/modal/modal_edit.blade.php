<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ url('inventory/edit') }}" method="post">
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
                                    <input type="hidden" class="form-control" id="edit_Id" name="id_product"
                                        maxlength="13">
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-dark"><strong>Date</strong>
                                    </label>
                                    <input type="date" class="form-control" id="edit_date" value="edit_date" name="date_product">
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
                <div class="modal-footer ">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
