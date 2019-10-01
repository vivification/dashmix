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
                        <button class= "btn btn-warning" onclick="window.location.href='/accounts/edit/{{$accounts->id}}'">
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
                                <li class="nav-item">
                                    <a class="nav-link" href="#btabs-alt-static-contacts">Contacts +</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#btabs-alt-static-invoices">Invoices +</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#btabs-alt-static-purchases">Purchases +</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#btabs-alt-static-locations">Locations +</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#btabs-alt-static-shipping">Shipping Addresses +</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#btabs-alt-static-billing">Billing Groups +</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#btabs-alt-static-notes">Notes +</a>
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

                                                        <div class="form-group">
                                                            <label type="text" name="name">Client Type & Industry:</label>
                                                            <br>
                                                            <button type="button" class="btn btn-sm btn-success">
                                                                @if($accounts->account_type)
                                                                    {{$accounts->account_type->f_account_type_name}}
                                                                @endif
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn btn-info">
                                                                @if($accounts->account_industry)
                                                                    {{$accounts->account_industry->f_industry_name}}
                                                                @endif
                                                            </button>
                                                            <br>
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
                                                                       value="{{$accounts->account_currency->f_currency_abbreviation}}"
                                                                       class="form-control" readonly>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Price Level:</label>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->price_level->f_price_level_name}}"
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
                                    {{--Start Contacts--}}
                                    <div class="tab-pane" id="btabs-alt-static-contacts" role="tabpanel">
                                        <div class="block block-rounded block-bordered">
                                            <div class="block-header block-header-default">
                                                <h3 class="block-title">
                                                    <i class="far fa-address-book fa-lg"></i>
                                                    Primary Contact
                                                </h3>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="block block-rounded block-bordered"
                                                     style="margin-top: 20px;">
                                                    <div class="block-content">
                                                        <div class="col-md-6 form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        Name:
                                                                    </span>
                                                                </div>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->contact_primary->f_contact_first_name .' '.$accounts->contact_primary->f_contact_last_name}}"
                                                                       class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        Phone:
                                                                    </span>
                                                                </div>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->contact_primary->f_contact_phone_main}}"
                                                                       class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        Mobile:
                                                                    </span>
                                                                </div>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->contact_primary->f_contact_phone_mobile}}"
                                                                       class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        Email:
                                                                    </span>
                                                                </div>
                                                                <input type="text" name="name"
                                                                       value="{{$accounts->contact_primary->f_contact_email}}"
                                                                       class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block block-rounded block-bordered">
                                            <div class="block-header block-header-default">
                                                <h3 class="block-title">
                                                    <i class="far fa-address-book fa-lg"></i>
                                                    Contacts
                                                </h3>
                                            </div>
                                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full myCustomTable">
                                                <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 50px;">ID</th>
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">First
                                                        Name
                                                    </th>
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Last
                                                        Name
                                                    </th>
                                                    {{--                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Address</th>--}}
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Phone
                                                    </th>
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Mobile
                                                    </th>
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Fax</th>
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Email
                                                    </th>
                                                    <th class="d-none d-sm-table-cell" style="width: 5%;"></th>
                                                    <th style="width: 5%;"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                // we don't need to use foreach on $accounts because $accounts will always have one account
                                                // We need to use foreach for contact list since we will have an array of contacts
                                                ?>
                                                @if($accounts->contact_list)
                                                    @foreach($accounts->contact_list as $single_contact)
                                                        <tr>
                                                            <td class="text-center">
                                                                {{$single_contact->f_contact_id}}
                                                            </td>
                                                            <td class="font-w600">
                                                                {{$single_contact->f_contact_first_name}}
                                                            </td>
                                                            <td class="font-w600">
                                                                {{$single_contact->f_contact_last_name}}
                                                            </td>
                                                            {{--                                                            <td class="font-w600">--}}
                                                            {{--                                                                {{$single_contact->f_contact_address_street}}--}}
                                                            {{--                                                            </td>--}}
                                                            <td class="font-w600">
                                                                {{$single_contact->f_contact_phone_main}}
                                                            </td>
                                                            <td class="font-w600">
                                                                {{$single_contact->f_contact_phone_mobile}}
                                                            </td>
                                                            <td class="font-w600">
                                                                {{$single_contact->f_contact_fax}}
                                                            </td>
                                                            <td class="font-w600">
                                                                {{$single_contact->f_contact_email}}
                                                            </td>
                                                            <td class="font-w600">
                                                                <button class= "btn btn-primary btn-sm" onclick="window.location.href='/contacts/view/{{$single_contact->f_contact_id}}'">View</button>
                                                            </td>
                                                            <td class="font-w600">
                                                                <button class= "btn btn-warning btn-sm" onclick="window.location.href='/quotes/create'">Edit</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{--Start Invoices--}}
                                    <div class="tab-pane" id="btabs-alt-static-invoices" role="tabpanel">
                                            <!-- Dynamic Table Full -->
                                            <div class="block block-rounded block-bordered">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">
                                                        <i class="far fa-address-book fa-lg"></i>
                                                        Invoices
                                                    </h3>
                                                </div>
                                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                                                <table class="table table-bordered table-striped table-vcenter js-dataTable-full myCustomTable">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 50px;">ID</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Name</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Address
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Phone
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Mobile
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Email
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Address
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width: 300px;">Notes
                                                        </th>
                                                        <th style="width: 5%;"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    {{--Start Purchases--}}
                                    <div class="tab-pane" id="btabs-alt-static-purchases" role="tabpanel">
                                            <!-- Dynamic Table Full -->
                                            <div class="block block-rounded block-bordered">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">
                                                        <i class="far fa-address-book fa-lg"></i>
                                                        Purchases
                                                    </h3>
                                                </div>
                                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                                                <table class="table table-bordered table-striped table-vcenter js-dataTable-full myCustomTable">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 50px;">ID</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Name</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Address
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Phone
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Mobile
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Email
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Address
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width: 300px;">Notes
                                                        </th>
                                                        <th style="width: 5%;"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    {{--Start Locations--}}
                                    <div class="tab-pane" id="btabs-alt-static-locations" role="tabpanel">
                                            <!-- Dynamic Table Full -->
                                            <div class="block block-rounded block-bordered">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">
                                                        <i class="far fa-address-book fa-lg"></i>
                                                        Locations
                                                    </h3>
                                                </div>
                                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                                                <table class="table table-bordered table-striped table-vcenter js-dataTable-full myCustomTable">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 50px;">ID</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Name</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Address
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Phone
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Mobile
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Email
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Address
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width: 300px;">Notes
                                                        </th>
                                                        <th style="width: 5%;"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    {{--Start Shipping--}}
                                    <div class="tab-pane" id="btabs-alt-static-shipping" role="tabpanel">
                                            <!-- Dynamic Table Full -->
                                            <div class="block block-rounded block-bordered">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">
                                                        <i class="far fa-address-book fa-lg"></i>
                                                        Shipping Addresses
                                                    </h3>
                                                </div>
                                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                                                <table class="table table-bordered table-striped table-vcenter js-dataTable-full myCustomTable">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 50px;">ID</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Name</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Address
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Phone
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Mobile
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Email
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Address
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width: 300px;">Notes
                                                        </th>
                                                        <th style="width: 5%;"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    {{--Start Billing--}}
                                    <div class="tab-pane" id="btabs-alt-static-billing" role="tabpanel">
                                            <!-- Dynamic Table Full -->
                                            <div class="block block-rounded block-bordered">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">
                                                        <i class="far fa-address-book fa-lg"></i>
                                                        Billing Groups
                                                    </h3>
                                                </div>
                                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                                                <table class="table table-bordered table-striped table-vcenter js-dataTable-full myCustomTable">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 50px;">ID</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Name</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Address
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Phone
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Mobile
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Email
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Address
                                                        </th>
                                                        <th class="d-none d-sm-table-cell" style="width: 300px;">Notes
                                                        </th>
                                                        <th style="width: 5%;"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    {{--Start Notes--}}
                                    <div class="tab-pane" id="btabs-alt-static-notes" role="tabpanel">
                                        <!-- Dynamic Table Full -->
                                        <div class="block block-rounded block-bordered">
                                            <div class="block-header block-header-default">
                                                <h3 class="block-title">
                                                    <i class="far fa-address-book fa-lg"></i>
                                                    Notes
                                                </h3>
                                            </div>
                                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full myCustomTable">
                                                <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 50px;">ID</th>
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Name</th>
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Address
                                                    </th>
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Phone
                                                    </th>
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Mobile
                                                    </th>
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Email
                                                    </th>
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Address
                                                    </th>
                                                    <th class="d-none d-sm-table-cell" style="width: 300px;">Notes
                                                    </th>
                                                    <th style="width: 5%;"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
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
