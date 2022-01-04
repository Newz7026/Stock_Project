@extends('layouts.app', ['activePage' => 'claim', 'titlePage' => __('Claim Page')])

@section('content')
    <div class="content">
        <div class="container-fulid">
            @if (session('status'))
                <h5 class="alert alert-success">{{ session('status') }}</h5>

            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-nav-tabs">
                        <div class="card-header card-header-info">
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title"><strong>Claim Product</strong> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('claim/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleFormControlInput1" class="form-label text-dark"> <strong>
                                                    Date</strong></label>
                                            <input type="date" class="form-control" id="date_claim" name="date_claim">

                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleFormControlInput1" class="form-label text-dark"> <strong>
                                                    Name
                                                    Customer </strong></label>
                                            <input type="text" class="form-control" id="name_product" name="name_claim"
                                                placeholder="" maxlength="100">

                                    </div>

                                </div>

                                <div class="row ">
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-6 ">
                                            <label for="exampleFormControlInput1" class="form-label text-dark"> <strong>
                                                    Unit </strong></label>
                                            <input type="number" class="form-control" name="unit_claim" id="unit_claim">

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-6">
                                            <label for="exampleFormControlTextarea1"
                                                class="form-label text-dark"><strong>Note</strong></label>
                                            <textarea class="form-control" name="note_claim" rows="3"></textarea>

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
                                        <button type="submit" class="btn btn-success">Claim Product </button>
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
                        <div class="card-header card-header-rose">
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title "><strong>Claim Product List</strong> </h4>
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
                                        Name Custome
                                    </th>
                                    <th>
                                        Name Product
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
                                    <th>
                                        Note
                                    </th>
                                    <th class="text-center">
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @php
                                        $count = 0;
                                    @endphp
                                    @foreach ($data_claim as $data)
                                        <tr>
                                            <td>
                                                {{ $count += 1 }}
                                            </td>
                                            <td>
                                                {{ $data->claim_name }}
                                            </td>
                                            <td>
                                                {{ $data->product_name }}
                                            </td>

                                            <td>
                                                {{ $data->product_sku }}
                                            </td>
                                            <td>
                                                {{ $data->claim_unit }}
                                            </td>
                                            <td>
                                                {{ date('d/m/Y', strtotime($data->claim_date)) }}
                                            </td>
                                            <td>
                                                {{ $data->claim_note }}
                                            </td>
                                            <td class="td-actions text-center">
                                                <div class="btn-group " role="group" aria-label="Basic example">
                                                    <button type="button" rel="tooltip"
                                                        class="btn btn-warning btn-lg btn-edit" data-toggle="modal"
                                                        data-target="#editModal" data-id-edit="{{ $data->product_barcode }}"
                                                        data-id-claim-edit="{{ $data->claim_id  }}"
                                                        data-name-edit="{{ $data->claim_name }}"
                                                        data-sku-edit="{{ $data->claim_sku }}"
                                                        data-unit-edit="{{ $data->claim_unit }}"
                                                        data-date-edit="{{ $data->claim_date }}"
                                                        data-note-edit="{{ $data->claim_note }}">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip"
                                                        class="btn btn-danger btn-lg btn-del" data-toggle="modal"
                                                        data-target="#delModal" data-id-del="{{ $data->claim_id }}"
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
    @include('pages.claim.modal.script')
    @include('pages.claim.modal.modal_edit')
    @include('pages.claim.modal.modal_del')
@endsection
