@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="col-md-6">
            <div class="block block-themed bg-image">
                <div class="block-header bg-primary-dark-op">
                    <h2 class="block-title"><i
                                class="far fa-address-card fa-lg"></i> {{$pricelevels->f_price_level_name}}</h2>
                    <div class="block-options">
                        <form class="save" method="post" action="{{route('pricelevels.update', $pricelevels->f_price_level_id) }}">
                                <input type="hidden" name="_method" value="PUT">
                                @method('POST')
                                @csrf
                                <input type="submit" class="btn btn-warning" value="Save">
                    </div>
                </div>

                <!-- Block Tabs -->
                <div class="row">
                    <div class="col-lg-12 accounts-wrapper">
                        <!-- Block Tabs Alternative Style -->
                        <div class="block block-rounded block-bordered">
                            <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#btabs-alt-static-home">Price Level</a>
                                </li>
                            </ul>
                            <div class="block-content tab-content col-md-12" style="float: left">
                                <div class="tab-pane active" id="btabs-alt-static-home" role="tabpanel">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="example-hf-email">Name:</label>
                                        <div class="col-sm-8 form-group">
                                            <input type="text" class="form-control"
                                                   name="name"
                                                   value="{{$pricelevels->f_price_level_name}}">
                                        </div>
                                        <label class="col-md-3 col-form-label"
                                               for="example-hf-email">Description:</label>
                                        <div class="col-sm-8 form-group">
                                            <textarea rows="4" cols="50" class="form-control"
                                                      name="description">{{$pricelevels->f_description}}</textarea>
                                        </div>
                                        <label class="col-md-3 col-form-label" for="example-hf-email">Rate:</label>
                                        <div class="col-sm-8 form-group">
                                            <input type="text" class="form-control"
                                                   name="rate" value="{{$pricelevels->f_rate}}">
                                        </div>
                                        <label class="col-md-3 col-form-label" for="example-hf-email">Status:</label>
                                        <div class="col-sm-8 form-group">
                                            <select class="form-control" name="status">
                                                    <option value="Active">Active</option>
                                                    <option value="InActive">InActive</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-8 form-group">
                                            <input type="hidden" class="form-control" id="status" name="status"
                                                   value="Active">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Block Tabs Alternative Style -->
                    </div>
                </div>
            </div>
            <!-- END Block Tabs Default Style -->

            <div class="content">
            </div>
        </div>
    </div>
@endsection


@section('js_after')

    <script>
        $(".save").on("submit", function(){
            return confirm("Are you sure you wish to save your changes?");
        });
    </script>

@stop
