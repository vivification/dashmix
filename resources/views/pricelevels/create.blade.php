@extends('layouts.backend')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Price Levels</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item active" aria-current="page">Price Levels</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="block block-rounded block-bordered col-md-6">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Create New Price Level</h3>
                </div>
                <div class="block-content">
                    <div class="col-lg-12">
                        <form class="mb-5" method="post" action="/price-levels/store">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="example-hf-email">Price Level Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="f_price_level_name"
                                           name="f_price_level_name" placeholder="Price Level Name..">
                                    <input type="hidden" class="form-control" id="status" name="status" value="Active">
                                </div>
                            </div>
                            <div class="form-group row">
                                {{csrf_field()}}
                                <input type="submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
