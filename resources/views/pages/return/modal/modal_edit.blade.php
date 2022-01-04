<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ url('returned/edit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Product Return</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md">
                            <div class="mb">
                                <label for="exampleFormControlInput1" class="form-label text-dark"> <strong>
                                        Date</strong></label>
                                <input type="date" class="form-control" id="edit_date" name="edit_date">
                                <input type="hidden" class="form-control" id="edit_Id_return" name="edit_Id_return">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb">
                                <label for="exampleFormControlInput1" class="form-label text-dark"> <strong>
                                        Unit </strong></label>
                                <input type="number" class="form-control" name="edit_unit" id="edit_unit">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label for="exampleFormControlInput1" class="form-label text-dark"><strong>ID/Barcode
                                    Product</strong> </label>
                            <input type="number" class="form-control" name="edit_Id" id="edit_Id" maxlength="13">

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
