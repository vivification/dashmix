@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="col-md-12">
            <div class="block block-themed bg-image">

                <div class="block-header bg-primary-dark-op">
                    <button type="button" class="btn btn-danger">
                        Viewing Contact Record
                    </button>
                    <div class="block-options">
                    </div>
                </div>

                <!-- Block Tabs -->
                <div class="row">
                    <div class="col-lg-12 accounts-wrapper">
                        <div class="block block-rounded block-bordered">
                            <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#btabs-alt-static-summary">Summary +</a>
                                </li>
                            </ul>

                                <div class="col-md-6">
                                    <div class="block block-rounded block-bordered" style="margin-top: 18px;">
                                        <div class="block-header">
                                            <h2 class="block-title"><i class="far fa-address-card fa-lg"></i>
                                                {{$contact->f_contact_first_name}} {{$contact->f_contact_last_name}}
                                            </h2>
                                        </div>
                                        <div class="block-content">

                                            <div class="form-group">
                                                <label type="text" name="name">Client Type:</label>
                                                <br>
                                                <button type="button" class="btn btn-success">
                                                    {{$contact->f_contact_status}}
                                                </button>
                                                <br>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label type="text" name="name">Account:</label>
                                                <div class="input-group-append">
                                                    <input type="email" class="form-control"  placeholder="{{$contact->additionalcontacts->f_account_name}}" readonly>
                                                    <div class="input-group-append">
                                                    <button type="button" class="btn btn-primary" onclick="window.location.pathname='../accounts/view/{{$contact->f_contact_reference}}'">View</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <label type="text" name="name">Address:</label>
                                                <input type="text" name="name"
                                                       value="{{$contact->f_contact_address_street}}"
                                                       class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label type="text" name="name">Address:</label>
                                                <input type="text" name="name"
                                                       value="{{$contact->f_contact_address_street_2}}"
                                                       class="form-control" readonly>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">City:</label>
                                                    <input type="text" name="name"
                                                           value="{{$contact->f_contact_phone_main}}"
                                                           class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">State:</label>
                                                    <input type="text" name="name"
                                                           value="{{$contact->f_contact_phone_mobile}}"
                                                           class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Postcode:</label>
                                                    <input type="text" name="name"
                                                           value="{{$contact->f_contact_phone_mobile}}"
                                                           class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Country:</label>
                                                    <input type="text" name="name"
                                                           value="{{$contact->f_contact_phone_mobile}}"
                                                           class="form-control" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label type="text" name="name">Phone:</label>
                                                    <input type="text" name="name"
                                                           value="{{$contact->f_contact_phone_main}}"
                                                           class="form-control" readonly>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label type="text" name="name">Mobile:</label>
                                                    <input type="text" name="name"
                                                           value="{{$contact->f_contact_phone_mobile}}"
                                                           class="form-control" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label type="text" name="name">Email:</label>
                                                    <input type="text" name="name"
                                                           value="{{$contact->f_contact_email}}"
                                                           class="form-control" readonly>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label type="text" name="name">Fax:</label>
                                                    <input type="text" name="name"
                                                           value="{{$contact->f_contact_fax}}"
                                                           class="form-control" readonly>
                                                </div>
{{--                                                <div class="col-md-6 form-group">--}}
{{--                                                    <label type="text" name="name">ABN:</label>--}}
{{--                                                    <input type="text" name="name"--}}
{{--                                                           value=""--}}
{{--                                                           class="form-control" readonly>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-6 form-group">--}}
{{--                                                    <label type="text" name="name">Vendor #:</label>--}}
{{--                                                    <input type="text" name="name"--}}
{{--                                                           value=""--}}
{{--                                                           class="form-control" readonly>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="col-md-6">--}}
{{--                                    <!-- Overlay Map -->--}}
{{--                                    <div class="block block-rounded block-bordered">--}}
{{--                                        <div class="block-header ">--}}
{{--                                            <h3 class="block-title"><i class="fa fa-map-marker fa-lg"></i>--}}
{{--                                                Address:</h3>--}}
{{--                                            <div class="block-options">--}}
{{--                                                <button type="button" class="btn-block-option">--}}
{{--                                                    <i class="si si-settings"></i>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Overlay Map Container -->--}}
{{--                                        <div id="map" style="height: 600px;">--}}
{{--                                        </div>--}}

{{--                                        <script>--}}
{{--                                            function initMap() {--}}
{{--                                                var options = {--}}
{{--                                                    zoom: 8,--}}
{{--                                                    center: {lat: 42.3601, lng: -71.0589}--}}
{{--                                                };--}}

{{--                                                var map = new google.maps.Map(document.getElementById('map'), options);--}}
{{--                                            }--}}
{{--                                        </script>--}}
{{--                                    </div>--}}
{{--                                    <!-- END Overlay Map -->--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection


@section('js_after')

@stop
