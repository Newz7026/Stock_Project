@extends('layouts.app', ['activePage' => 'product', 'titlePage' => __('Product Page')])

@section('content')
    <div class="content">
        <div class="container-fulid">
            @if (session('status'))
                <h5 class="alert alert-success">{{ session('status') }}</h5>

            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-rose">
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title "><strong>Products Table</strong> </h4>
                                </div>
                                <div class="col text-right">
                                    <a class="btn btn-success" href="{{url('inventory/add')}}">Inventory Update</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table" id="datatable">
                                <thead class=" text-primary ">
                                    <th>
                                        Picture
                                    </th>
                                    <th>
                                        Product Barcode
                                    </th>
                                    <th>
                                        Product Name
                                    </th>
                                    <th>
                                        Unit
                                    </th>
                                    <th>
                                        Cost Price
                                    </th>
                                    <th>
                                        Selling Price
                                    </th>
                                    <th>
                                        SKU
                                    </th>
                                    <th class="text-center">
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($data_product as $data)
                                        <tr>
                                            <td class="text-center">
                                                <img src="storage/product/{{ $data->product_img }}" width="75px"
                                                    height="75px" alt="">
                                            </td>
                                            <td>
                                                {{ $data->product_barcode }}
                                            </td>
                                            <td>
                                                {{ $data->product_name }}
                                            </td>
                                            <td>
                                            @if ( $data->product_unit > 10)
                                            <div class="alert alert-success text-center w-50" style="height: 3rem;" role="alert">
                                                {{ $data->product_unit }}
                                              </div>


                                            @else
                                            <div class="alert alert-danger text-center w-50" style="height: 3rem;" role="alert">
                                                {{ $data->product_unit }}
                                              </div>

                                            @endif
                                            </td>
                                            <td>
                                                {{ $data->product_cost }}
                                            </td>
                                            <td>
                                                {{ $data->product_sell_price }}
                                            </td>
                                            <td>
                                                {{ $data->product_sku }}
                                            </td>
                                            <td class="td-actions text-center">
                                                <div class="btn-group " role="group" aria-label="Basic example">
                                                    <button type="button" rel="tooltip"
                                                        class="btn btn-info btn-lg  btn-view" data-toggle="modal"
                                                        data-target="#viewModal" data-id="{{ $data->product_id }}"
                                                        data-barcode="{{ $data->product_barcode }}"
                                                        data-name="{{ $data->product_name }}"
                                                        data-img="{{ $data->product_img }}"
                                                        data-type="{{ $data->type_name }}"
                                                        data-unit="{{ $data->product_unit }}"
                                                        data-cost="{{ $data->product_cost }}"
                                                        data-sell="{{ $data->product_sell_price }}"
                                                        data-sku="{{ $data->product_sku }}">
                                                        <i class="material-icons">visibility</i>
                                                    </button>
                                                    <button type="button" rel="tooltip"
                                                        class="btn btn-warning btn-lg btn-edit" data-toggle="modal"
                                                        data-target="#editModal" data-id-edit="{{ $data->product_id }}"
                                                        data-barcode-edit="{{ $data->product_barcode }}"
                                                        data-name-edit="{{ $data->product_name }}"
                                                        data-img-edit="{{ $data->product_img }}"
                                                        data-type-edit="{{ $data->type_id }}"
                                                        data-unit-edit="{{ $data->product_unit }}"
                                                        data-cost-edit="{{ $data->product_cost }}"
                                                        data-sell-edit="{{ $data->product_sell_price }}"
                                                        data-sku-edit="{{ $data->product_sku }}">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip"
                                                        class="btn btn-danger btn-lg btn-del" data-toggle="modal"
                                                        data-target="#delModal" data-id="{{ $data->product_id }}"
                                                        data-name="{{ $data->product_name }}"
                                                        data-status="{{ $data->product_status }}">
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
    @include('pages.product.modal.script')
    @include('pages.product.modal.modal_view')
    @include('pages.product.modal.modal_edit')
    @include('pages.product.modal.modal_del')
@endsection
