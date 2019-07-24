@extends('layouts.backend')

@section('content')
    <!-- Hero -->
{{--    <div class="bg-body-light">--}}
{{--        <div class="content content-full">--}}
{{--            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">--}}
{{--                <h3 ><i class="far fa-address-card fa-lg" style="margin-bottom: 0 !important;"></i> {{$accounts->f_account_name}}</h3>--}}
{{--                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">--}}
{{--                    <ol class="breadcrumb">--}}
{{--                        <li class="breadcrumb-item">App</li>--}}
{{--                        <li class="breadcrumb-item active" aria-current="page">View Account</li>--}}
{{--                    </ol>--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="content">
        <div class="col-md-12">
            <div class="block block-themed bg-image" style="background-image: url('assets/media/photos/photo19.jpg');">
                <div class="block-header bg-primary-dark-op">
                    <h2 class="block-title"><i class="far fa-address-card fa-lg"></i> {{$accounts->f_account_name}}</h2>
                    <div class="block-options">
                        <button type="button" class="btn btn-warning">Edit</button>
                    </div>
                </div>

                <!-- Block Tabs -->
                <h2 class="content-heading">Block Tabs</h2>
                <div class="row">
                    <div class="col-lg-12 accounts-wrapper">
                        <!-- Block Tabs Default Style -->
                        <div class="block block-rounded block-bordered">
                            <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#btabs-static-home">Hzzome</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#btabs-static-profile">Profile</a>
                                </li>
                                <li class="nav-item ml-auto">
                                    <a class="nav-link" href="#btabs-static-settings">
                                        <i class="si si-settings"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="block-content tab-content">
                                <div class="tab-pane active" id="btabs-static-home" role="tabpanel">
                                    <h4 class="font-w400">Home Content</h4>
                                    <p>...</p>
                                </div>
                                <div class="tab-pane" id="btabs-static-profile" role="tabpanel">
                                    <h4 class="font-w400">Profile Content</h4>
                                    <p>...</p>
                                </div>
                                <div class="tab-pane" id="btabs-static-settings" role="tabpanel">
                                    <h4 class="font-w400">Settings Content</h4>
                                    <p>...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <!-- END Block Tabs Default Style -->


{{--                <div class="row" style="padding: 20px 20px 20px 20px;">--}}
{{--                    <div class="content">--}}
{{--                        <div class="row">--}}
{{--                            <ul class="nav nav-pills">--}}
{{--                                <li class=""><a data-toggle="tab" href="#home">Overview +</a></li>--}}
{{--                                <li><a data-toggle="pill" href="#menu1">Contacts +</a></li>--}}
{{--                                <li><a data-toggle="pill" href="#menu1">Activities +</a></li>--}}
{{--                                <li><a data-toggle="pill" href="#menu1">Accounts +</a></li>--}}
{{--                                <li><a data-toggle="pill" href="#menu2">Invoices +</a></li>--}}
{{--                                <li><a data-toggle="pill" href="#menu3">Purchases +</a></li>--}}
{{--                                <li><a data-toggle="pill" href="#menu4">Locations +</a></li>--}}
{{--                                <li><a data-toggle="pill" href="#menu5">Shipping Addresses +</a></li>--}}
{{--                                <li><a data-toggle="pill" href="#menu6">Billing Groups +</a></li>--}}
{{--                                <li><a data-toggle="pill" href="#menu6">Notes +</a></li>--}}
{{--                            </ul>--}}

{{--                            <div class="tab-content clearfix">--}}
{{--                                <div id="home" class="tab-pane fade">--}}
{{--                                    <div class="block block-themed bg-image" style="background-color: rgba(5, 77, 158, 0.8) !important">--}}
{{--                                        <div class="block-header bg-primary-dark-op">--}}

{{--                                            ssss--}}
{{--                                        </div>--}}
{{--                                <h1>Hello</h1>--}}

{{--                                </div>--}}
{{--                                <div id="menu1" class="tab-pane fade">--}}
{{--                                    <h1>Hello 2</h1>--}}
{{--                                </div>--}}
{{--                                <div id="menu2" class="tab-pane fade">--}}

{{--                                </div>--}}
{{--                                <div id="menu3" class="tab-pane fade">--}}

{{--                                </div>--}}
{{--                                <div id="menu4" class="tab-pane fade">--}}

{{--                                </div>--}}
{{--                                <div id="menu5" class="tab-pane fade">--}}

{{--                                </div>--}}
{{--                                <div id="menu6" class="tab-pane fade">--}}

{{--                                </div>--}}
{{--                                <div id="menu7" class="tab-pane fade">--}}

{{--                                </div>--}}
{{--                            </div>--}}


{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>
    </div>


    <!-- Page Content -->
    <div class="content">




    </div>
    <!-- END Page Content -->
    <!-- Page JS Plugins -->

@endsection
