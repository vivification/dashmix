@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="col-md-12">
            <div class="block block-themed bg-image">
                <div class="block-header bg-primary-dark-op">
                    <h2 class="block-title"><i class="far fa-address-card fa-lg"></i> {{$accounts->f_account_name}}</h2>
                    <div class="block-options">
                        <button type="button" class="btn btn-success">
                            @if($accounts->account_status)
                                {{$accounts->account_status->f_account_status_name}}
                            @endif
                        </button>
                        <button class= "btn btn-warning" onclick="window.location.href='/quotes/create'">
                            Edit
                        </button>
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
                                                                    class="far fa-address-card fa-lg"></i> Account
                                                            Details </h3>
                                                    </div>
                                                    <div class="block-content">
                                                        <form method="post" action="/edit/{{route('accounts.update', $accounts->id) }}">
                                                            @method('PATCH')
                                                            @csrf

                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <input type="email" class="form-control" id="example-group4-input2" name="example-group4-input2" placeholder="Email" aria-label="Text input with dropdown button">
                                                                    <div class="input-group-append">
                                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                                <i class="far fa-fw fa-bell mr-1"></i> Customer
                                                                            </a>
                                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                                <i class="far fa-fw fa-envelope mr-1"></i> Supplier
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        <div class="form-group">
                                                            <label type="text" name="name">Account Name:</label>
                                                            <input type="text" name="name"
                                                                   value="{{$accounts->f_account_name}}"
                                                                   class="form-control" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label type="text" name="name">Address:</label>
                                                            <input type="text" name="name"
                                                                   value="{{$accounts->f_account_address_street}}"
                                                                   class="form-control" readonly>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Phone:</label>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->f_account_phone_primary}}"
                                                                       class="form-control" readonly>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Fax:</label>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->f_account_fax}}"
                                                                       class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Email:</label>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->f_account_email_primary}}"
                                                                       class="form-control" readonly>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Website:</label>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->f_account_website}}"
                                                                       class="form-control" readonly>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">ABN:</label>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->f_account_abn}}"
                                                                       class="form-control" readonly>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Vendor #:</label>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->f_account_vendor}}"
                                                                       class="form-control" readonly>
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
                                                                       class="form-control" readonly>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Default Currency:</label>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->f_account_currency}}"
                                                                       class="form-control" readonly>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Price Level:</label>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->f_account_price_level}}"
                                                                       class="form-control" readonly>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Area Manager:</label>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->f_account_area_manager}}"
                                                                       class="form-control" readonly>
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

@stop
