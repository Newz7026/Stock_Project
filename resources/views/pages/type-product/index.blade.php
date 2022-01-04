@extends('layouts.app', ['activePage' => 'product-type', 'titlePage' => __('Type Product Page')])

@section('content')
    <div class="content">
        <div class="container">
            @if (session('status'))
                <h5 class="alert alert-success">{{ session('status') }}</h5>

            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title "><strong>Type Products Table</strong> </h4>
                                </div>
                                <div class="col text-right">
                                    <a class="btn btn-white text-dark" href="{{ url('type-product/add') }}">New Type</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <table class="table" id="datatable">
                                <thead class=" text-primary ">

                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Type Name
                                    </th>

                                    <th class="text-right">
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @php
                                    $count = 0;
                                    @endphp
                                    @foreach ($data_type as $data)
                                        <tr>
                                            <td>
                                                {{ $count +=1 }}
                                            </td>
                                            <td>
                                                {{ $data->type_name }}
                                            </td>
                                            <td class="td-actions text-right">
                                                <div class="btn-group " role="group" aria-label="Basic example">
                                                    <button type="button" rel="tooltip"
                                                        class="btn btn-warning btn-lg btn-edit" data-toggle="modal"
                                                        data-target="#editModal" data-id-edit="{{ $data->type_id }}"
                                                        data-name-edit="{{ $data->type_name }}">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip"
                                                        class="btn btn-danger btn-lg btn-del" data-toggle="modal"
                                                        data-target="#delModal" data-id="{{ $data->type_id }}"
                                                        data-name="{{ $data->type_name }}">
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
    @include('pages.type-product.modal.edit_modal')
    @include('pages.type-product.modal.script')
    @include('pages.type-product.modal.del_modal')
@endsection
