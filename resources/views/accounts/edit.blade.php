@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="col-md-12">
            <div class="block block-themed bg-image">
                <div class="block-header bg-primary-dark-op">
                    <h2 class="block-title"><i class="far fa-address-card fa-lg"></i> {{$accounts->f_account_name}}</h2>
                    <div class="block-options">
                        <form class="save" method="post" action="{{route('accounts.update', $accounts->id) }}">
                            <input type="hidden" name="_method" value="PUT">
                            @method('POST')
                            @csrf
                        <input type="submit" class="btn btn-warning" value="Save">
                    </div>
                </div>

                <!-- Block Tabs -->
                <div class="row">
                    <div class="col-lg-12 accounts-wrapper">

                        <!-- Block Tabs Default Style -->
                        <div class="block block-rounded block-bordered">
                            <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#btabs-alt-static-summary">Summary +</a>
                                </li>
                            </ul>
                            <div class="block block-rounded block-bordered">
                                <div class="block-content tab-content">
                                    <div class="tab-pane active" id="btabs-alt-static-summary" role="tabpanel">
                                        <div class="row">
                                            @if($accounts->contact_primary)
                                                {{$accounts->contact_primary->f_account_contact_primary}}
                                            @endif
                                            <div class="col-md-6">
                                                <div class="block block-rounded block-bordered">
                                                    <div class="block-header">
                                                        <h3 class="block-title"><i
                                                                    class="far fa-address-card fa-lg"></i> Account Details </h3>
                                                    </div>
                                                    <div class="block-content">

                                                            <div class="row">
                                                                <div class="col-md-6 form-group">
                                                                    <label type="text" name="name">Account Status:</label>
                                                                    <div class="input-group">
                                                                        <select class="form-control" name="accountstatus">
                                                                            @foreach($accounts as $account)
                                                                                <option value="{{$accounts->account_status->f_account_status_id}}">{{$accounts->account_status->f_account_status_name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6 form-group">
                                                                    <label type="text" name="accounttype">Account Type:</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group">
{{--                                                                            <select class="form-control" name="accounttype">--}}
{{--                                                                                @foreach($account_types as $account_type)--}}
{{--                                                                                <option value="{{$account_types->f_account_type_id}}">{{$account_types->f_account_type_name}}</option>--}}
{{--                                                                                @endforeach--}}
{{--                                                                            </select>--}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        <div class="form-group">
                                                            <label type="text" name="accountname">Account Name:</label>
                                                            <input type="text" name="accountname" value="{{$accounts->f_account_name}}" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label type="text" name="accountaddress">Address:</label>
                                                            <input type="text" name="accountaddress" value="{{$accounts->f_account_address_street}}" class="form-control" >
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="accountphone">Phone:</label>
                                                                <input type="text" name="accountphone" value="{{$accounts->f_account_phone_primary}}" class="form-control" >
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="accountfax">Fax:</label>
                                                                <input type="text" name="accountfax" value="{{$accounts->f_account_fax}}" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="accountemail">Email:</label>
                                                                <input type="text" name="accountemail" value="{{$accounts->f_account_email_primary}}" class="form-control">
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="accountwebsite">Website:</label>
                                                                <input type="text" name="accountwebsite" value="{{$accounts->f_account_website}}" class="form-control">
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="accountabn">ABN:</label>
                                                                <input type="text" name="accountabn" value="{{$accounts->f_account_abn}}" class="form-control">
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="accountvendor">Vendor #:</label>
                                                                <input type="text" name="accountvendor" value="{{$accounts->f_account_vendor}}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>

                                                <div class="block block-rounded block-bordered">
                                                    <div class="block-header">
                                                        <h3 class="block-title"><i class="far fa-credit-card fa-lg"></i>
                                                            Terms </h3>
                                                    </div>
                                                    <div class="block-content">
                                                        <div class="row">
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Terms:</label>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->f_account_terms}}"
                                                                       class="form-control" >
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Default Currency:</label>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->account_currency->f_currency_abbreviation}}"
                                                                       class="form-control" >
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Price Level:</label>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->price_level->f_price_level_name}}"
                                                                       class="form-control" >
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Area Manager:</label>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->f_account_area_manager}}"
                                                                       class="form-control" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Overlay Map -->
                                                <div class="block block-rounded block-bordered">
                                                    <div class="block-header ">
                                                        <h3 class="block-title"><i class="fa fa-map-marker fa-lg"></i>
                                                            Address:</h3>
                                                        <div class="block-options">
                                                            <button type="button" class="btn-block-option">
                                                                <i class="si si-settings"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- Overlay Map Container -->
                                                    <div id="map" style="height: 600px;">
                                                    </div>

                                                    <script>
                                                        function initMap() {
                                                            var options = {
                                                                zoom: 8,
                                                                center: {lat: 42.3601, lng: -71.0589}
                                                            };

                                                            var map = new google.maps.Map(document.getElementById('map'), options);
                                                        }
                                                    </script>
                                                </div>
                                                <!-- END Overlay Map -->
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
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
