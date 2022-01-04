<!-- Modal -->
<div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('product-destroy') }}" method="POST">
            @csrf
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="alert alert-danger text-center" role="alert">

                        Are you sure?
                        <input type="text" class="form-control text-center text-white mt-2" id="delete_Name" name="name"
                        disabled>
                        <input type="hidden" class="form-control text-center text-white mt-2" id="delete_Id" name="id">
                    </div>


                    <input type="hidden" class="form-control text-center text-white mt-2" id="delete_Status"
                        name="status" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete Product</button>
                </div>
            </div>
        </form>
    </div>
</div>
