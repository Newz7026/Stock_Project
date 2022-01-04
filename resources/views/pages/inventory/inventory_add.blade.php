@extends('layouts.app', ['activePage' => 'inventory-update', 'titlePage' => __('Inventory Update Page')])

@section('content')
    <div class="content">
        <div class="container">
            @if (session('status'))
                <h5 class="alert alert-success">{{ session('status') }}</h5>

            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success ">
                            <h4 class="card-title">Inventory Update</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('inventory/update') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label text-dark"> <strong>
                                                    Date </strong></label>
                                            <input type="date" class="form-control" placeholder="dd-mm-yyyy" id="date" name="date"
                                                >
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
                                            <input type="number" class="form-control" name="barcode_product"
                                                maxlength="13">
                                        </div>
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4 text-center">
                                        <button type="submit" class="btn btn-success">Show </button>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <table class="table text-center">
                                <thead>
                                    <td>#</td>
                                            <td>

                                                {{ __('barcode') }}
                                            </td>
                                            <td>
                                                {{ __('name') }}
                                            </td>
                                            <td>
                                                {{ __('Unit') }}
                                            </td>
                                            <td>
                                                {{ __('Cost Price') }}
                                            </td>
                                            <td>
                                                {{ __('Selling Price') }}
                                            </td>
                                            <td>
                                                {{ __('SKU') }}
                                            </td>
                                            <td>
                                                {{ __('Date') }}
                                            </td>
                                </thead>
                                <tbody>
                                    @if ($data != '')
                                        @php
                                            $count = 0;
                                        @endphp
                                        @foreach ($data as $datas)
                                            <td>{{ $count += 1 }}</td>
                                            <td>
                                                {{ $datas->product_barcode }}
                                            </td>
                                            <td>
                                                {{ $datas->product_name }}
                                            </td>
                                            <td>
                                                {{ 1 }}
                                            </td>
                                            <td>
                                                {{ $datas->product_cost }}
                                            </td>
                                            <td>
                                                {{ $datas->product_sell_price }}
                                            </td>
                                            <td>
                                                {{ $datas->product_sku }}
                                            </td>
                                            <td>
                                                {{ date('d/m/Y', strtotime($datas->inventory_date)); }}
                                            </td>
                                        @endforeach

                                    @endif


                                </tbody>

                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
