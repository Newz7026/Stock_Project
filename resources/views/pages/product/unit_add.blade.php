@extends('layouts.app', ['activePage' => 'add-unit', 'titlePage' => __('Unit Product Page')])

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
                            <h4 class="card-title">Add Unit Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('product/unit_add') }}" method="GET">
                                @csrf
                                {{-- <div class="row">
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label text-dark"> <strong>
                                                    Date </strong></label>
                                            <input type="date" class="form-control" placeholder="dd-mm-yyyy" id="name_product" name="name_product"
                                                >
                                        </div>
                                    </div>

                                </div> --}}

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
                                        <a href="{{ route('product') }}" class="btn btn-warning">Back</a>
                                        <button type="submit" class="btn btn-success">ADD </button>
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
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Unit Count</th>
                                </thead>
                                <tbody>

                                    @if ($data != '')

                                        @php
                                            $count = 0;
                                        @endphp

                                        @foreach ($data as $datas)
                                            @php
                                            @endphp
                                            <tr>
                                                <td>{{ $count += 1 }}</td>
                                                <td>{{ $datas->product_name }}</td>
                                                <td>{{ $datas->product_unit }}</td>
                                            </tr>
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
