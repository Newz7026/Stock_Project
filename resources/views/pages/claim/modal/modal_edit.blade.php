<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ url('claim/edit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Product Claim</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @csrf

                    <div class="row">
                        <div class="col-md">
                            <div class="mb">
                                <label for="exampleFormControlInput1" class="form-label text-dark"> <strong>
                                        Date</strong></label>
                                <input type="date" class="form-control" id="edit_date" name="edit_date">
                                <input type="hidden" class="form-control" id="edit_Id_claim" name="edit_Id_claim">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb">
                                <label for="exampleFormControlInput1" class="form-label text-dark"> <strong>
                                        Name
                                        Customer </strong></label>
                                <input type="text" class="form-control" id="edit_name" name="edit_name" placeholder=""
                                    maxlength="100">
                            </div>
                        </div>

                    </div>

                    <div class="row ">
                        <div class="col-md ">
                            <div class="mb ">
                                <label for="exampleFormControlInput1" class="form-label text-dark"> <strong>
                                        Unit </strong></label>
                                <input type="number" class="form-control" name="edit_unit" id="edit_unit">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="mb-2">
                                <label for="exampleFormControlTextarea1"
                                    class="form-label text-dark"><strong>Note</strong></label>
                                <textarea class="form-control" name="edit_note" id="edit_note" rows="3"></textarea>
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
