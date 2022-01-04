@extends('layouts.app', ['activePage' => 'new-product', 'titlePage' => __('New Product Page')])

@section('content')
    <div class="content">
        <div class="container-fulid">
            @if (session('status'))
                <h5 class="alert alert-success">{{ session('status') }}</h5>

            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success ">
                            <h4 class="card-title">Add New Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('product/add') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label text-dark"> <strong>
                                                    Name
                                                    Product </strong></label>
                                            <input type="text" class="form-control" id="name_product" name="name_product"
                                                placeholder="" maxlength="100">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label text-dark"><strong>Cost
                                                    Price</strong> </label>
                                            <input type="number" class="form-control" id="cost_product"
                                                name="cost_product" placeholder="" maxlength="13">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label text-dark">
                                                <strong>Selling
                                                    Price</strong> </label>
                                            <input type="number" class="form-control" id="sell_product"
                                                name="sell_product" placeholder="" maxlength="13">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>

                                    <div class="col-md-2">
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-3 ">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-dark"><strong>SKU</strong>
                                            </label>
                                            <input type="text" class="form-control" id="sku_product" name="sku_product"
                                                placeholder="" maxlength="13">
                                        </div>
                                    </div>
                                    <div class="col-md-3 ">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label text-dark"><strong>Type
                                                    Product</strong>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="type_id">
                                                <option value="" selected></option>
                                                @foreach ($type as $data)
                                                    <option value="{{ $data->type_id }}">{{ $data->type_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row ">
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-3 ">
                                        <div class="mb-3 ">
                                            <label for="image" class="form-label text-dark"><strong>Image</strong> </label>
                                            <input type="file" class="form-control" name="image" id="image">
                                        </div>
                                    </div>
                                    <div class="col-md-3 ">
                                        <div class="mb-3 ">
                                            <label for="exampleFormControlInput1" class="form-label text-dark"> <strong> Unit  </strong></label>
                                            <input type="number" class="form-control" name="unit" id="unit">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-dark"><strong>ID/Barcode
                                                    Product</strong> </label>
                                            <input type="number" class="form-control"
                                                name="id_product" maxlength="13">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4 text-center">
                                        <a href="{{ route('product') }}" class="btn btn-warning">Back</a>
                                        <button type="reset" class="btn btn-default">Clear</button>
                                        <button type="submit" class="btn btn-success">Add </button>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
