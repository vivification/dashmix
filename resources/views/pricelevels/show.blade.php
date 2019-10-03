@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="col-md-6">
            <div class="block block-themed bg-image">
                <div class="block-header bg-primary-dark-op">
                    <h2 class="block-title"><i class="far fa-address-card fa-lg"></i> {{$pricelevels->f_price_level_name}}</h2>
                    <div class="block-options">
                        <button type="button" class="btn btn-success">
                            @if($pricelevels->f_status)
                                {{$pricelevels->f_status}}
                            @endif
                        </button>
                        <button class= "btn btn-warning" onclick="window.location.href='/price-levels/edit/{{$pricelevels->f_price_level_id}}'">
                            Edit
                        </button>
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
                                <li class="nav-item">
                                    <a class="nav-link" href="#btabs-alt-static-logs">Logs</a>
                                </li>
                            </ul>
                            <div class="block-content tab-content col-md-12" style="float: left">
                                <div class="tab-pane active" id="btabs-alt-static-home" role="tabpanel">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="example-hf-email">Name:</label>
                                        <div class="col-sm-8 form-group">
                                            <input type="text" class="form-control"
                                                   name="f_price_level_name"  value="{{$pricelevels->f_price_level_name}}" readonly>
                                        </div>
                                        <label class="col-md-3 col-form-label" for="example-hf-email">Description:</label>
                                        <div class="col-sm-8 form-group">
                                            <textarea rows="4" cols="50" class="form-control" name="f_price_level_name" readonly>{{$pricelevels->f_description}}</textarea>
                                        </div>
                                        <label class="col-md-3 col-form-label" for="example-hf-email">Rate:</label>
                                        <div class="col-sm-8 form-group">
                                            <input type="text" class="form-control"
                                                   name="f_price_level_name"  value="{{$pricelevels->f_rate}}" readonly>
                                        </div>
                                        <label class="col-md-3 col-form-label" for="example-hf-email">Status:</label>
                                        <div class="col-sm-8 form-group">
                                            <input type="text" class="form-control"
                                                   name="f_price_level_name"  value="{{$pricelevels->f_status}}" readonly>
                                        </div>
                                        <div class="col-sm-8 form-group">
                                            <input type="hidden" class="form-control" id="status" name="status" value="Active">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="btabs-alt-static-logs" role="tabpanel">
                                    <!-- Dynamic Table Full -->
                                    <div class="block block-rounded block-bordered">
                                        <div class="block-header block-header-default">
                                            <h3 class="block-title">
                                                <i class="far fa-address-book fa-lg"></i>
                                                Logs
                                            </h3>
                                        </div>
                                        <div>
                                            <ul>
                                                @forelse ($audits as $audit)
                                                    <li>
                                                        {{--                                                            This LANG file is located under resources -> lang -> en > accounts.php--}}
                                                        @lang('/audit/pricelevels.updated.metadata', $audit->getMetadata())

                                                        @foreach ($audit->getModified() as $attribute => $modified)
                                                            <ul>
                                                                <li>@lang('/audit/pricelevels.'.$audit->event.'.modified.'.$attribute, $modified)</li>
                                                            </ul>
                                                        @endforeach
                                                    </li>
                                                @empty
                                                    <p>@lang('/audit/pricelevels.unavailable_audits')</p>
                                                @endforelse
                                            </ul>
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

@stop
