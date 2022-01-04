@extends('layouts.app', ['activePage' => '/', 'titlePage' => __('New Type Product Page')])

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success ">
                            <h4 class="card-title">Add New Type</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('type-product/add') }}" method="POST" >
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label text-dark"> <strong> Name
                                                Product </strong></label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="" maxlength="100">
                                        </div>
                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4 text-center">
                                        <a href="{{route('type-product')}}" class="btn btn-warning">Back</a>
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
