@extends('layouts.app', ['activePage' => 'returned', 'titlePage' => __('Returned Page')])

@section('content')
    <div class="content">
        <div class="container-fulid">
            @if (session('status'))
                <h5 class="alert alert-success">{{ session('status') }}</h5>

            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-nav-tabs">
                        <div class="card-header card-header-primary">
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title"><strong>Return Product</strong> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('returned/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleFormControlInput1" class="form-label text-dark"> <strong>
                                                Date</strong></label>
                                        <input type="date" class="form-control" name="date">

                                    </div>
                                    <div class="col-md-3 ">
                                        <label for="exampleFormControlInput1" class="form-label text-dark"> <strong>
                                                Unit </strong></label>
                                        <input type="number" class="form-control" name="unit" >

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput1"
                                            class="form-label text-dark"><strong>ID/Barcode
                                                Product</strong> </label>
                                        <input type="number" class="form-control" name="id_product" maxlength="13">

                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4 text-center">
                                        <button type="reset" class="btn btn-warning">Clear</button>
                                        <button type="submit" class="btn btn-success">Return Product</button>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title "><strong>Return Product List</strong> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table" id="datatable">
                                <thead class=" text-primary ">
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        SKU
                                    </th>
                                    <th>
                                        Unit
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                    <th class="text-center">
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @php
                                        $count = 0;
                                    @endphp
                                    @foreach ($data_return as $data)
                                        <tr>
                                            <td>
                                                {{ $count += 1 }}
                                            </td>
                                            <td>
                                                {{ $data->product_name }}
                                            </td>
                                            <td>
                                                {{ $data->product_sku }}
                                            </td>
                                            <td>
                                                {{ $data->return_unit }}
                                            </td>
                                            <td>
                                                {{ date('d/m/Y', strtotime($data->return_date)) }}
                                            </td>
                                            <td class="td-actions text-center">
                                                <div class="btn-group " role="group" aria-label="Basic example">
                                                    <button type="button" rel="tooltip"
                                                        class="btn btn-warning btn-lg btn-edit" data-toggle="modal"
                                                        data-target="#editModal" data-id-edit="{{ $data->product_barcode  }}"
                                                        data-id-product-edit="{{ $data->return_id  }}"
                                                        data-date-edit="{{ $data->return_date }}"
                                                        data-unit-edit="{{ $data->return_unit }}">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip"
                                                        class="btn btn-danger btn-lg btn-del" data-toggle="modal"
                                                        data-target="#delModal" data-id-del="{{ $data->return_id }}"
                                                        data-name-del="{{ $data->product_name }}">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.return.modal.script')
    @include('pages.return.modal.modal_edit')
    @include('pages.return.modal.modal_del')
@endsection
