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
            <div class="block block-themed bg-image">
                <div class="block-header bg-primary-dark-op">
                    <h2 class="block-title"><i class="far fa-address-card fa-lg"></i> {{$accounts->f_account_name}}</h2>
                    <div class="block-options">
                        <button type="button" class="btn btn-success">
                            @if($accounts->account_status)
                                {{$accounts->account_status->f_account_status_name}}
                            @endif
                        </button>
                    </div>
                </div>

                <!-- Block Tabs -->
                <div class="row">
                    <div class="col-lg-12 accounts-wrapper">
                        <div class="row">
                            <br>
                            <br>
                                <div class="col-sm-6 col-xl-4">

                                </div>
                            <br>
                            <br>

                            @if($accounts->contact_primary)
                                {{$accounts->contact_primary->f_account_contact_primary}}
                            @endif

                        </div>
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
                                        <a class="nav-link" href="#btabs-alt-static-activities">Activities +</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-alt-static-activities">Invoices +</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-alt-static-activities">Purchases +</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-alt-static-activities">Locations +</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-alt-static-activities">Shipping Addresses +</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-alt-static-activities">Billing Groups +</a>
                                    </li>

                                </ul>
                                <div class="block-content tab-content">
                                    <div class="tab-pane active" id="btabs-alt-static-summary" role="tabpanel">

                                       <div class="row">

                                           <div class="col-md-6">
                                               <div class="block block-rounded block-bordered">
                                                   <div class="block-header">
                                                       <h3 class="block-title"><i class="far fa-address-card fa-lg"></i> Account Details </h3>
                                                   </div>
                                                   <div class="block-content">

                                                       <div class="form-group">
                                                           <label type="text" name="name">Client Type:</label>
                                                           <br>
                                                           <button type="button" class="btn btn-sm btn-success">
                                                               @if($accounts->account_type)
                                                                   {{$accounts->account_type->f_account_type_name}}
                                                               @endif
                                                           </button>
                                                           <br>
                                                       </div>
                                                       <div class="form-group">
                                                           <label type="text" name="name">Account Name:</label>
                                                           <input type="text" name="name" value="{{$accounts->f_account_name}}" class="form-control" readonly>
                                                       </div>
                                                       <div class="form-group">
                                                           <label type="text" name="name">Address:</label>
                                                           <input type="text" name="name" value="{{$accounts->f_account_address_street}}" class="form-control" readonly>
                                                       </div>
                                                       <div class="row">
                                                           <div class="col-md-6 form-group">
                                                               <label type="text" name="name">Phone:</label>
                                                               <input type="text" name="name" value="{{$accounts->f_account_phone_primary}}" class="form-control" readonly>
                                                           </div>
                                                           <div class="col-md-6 form-group">
                                                               <label type="text" name="name">Fax:</label>
                                                               <input type="text" name="name" value="{{$accounts->f_account_fax}}" class="form-control" readonly>
                                                           </div>
                                                       </div>
                                                       <div class="row">
                                                           <div class="col-md-6 form-group">
                                                               <label type="text" name="name">Email:</label>
                                                               <input type="text" name="name" value="{{$accounts->f_account_email_primary}}" class="form-control" readonly>
                                                           </div>
                                                           <div class="col-md-6 form-group">
                                                               <label type="text" name="name">Website:</label>
                                                               <input type="text" name="name" value="{{$accounts->f_account_website}}" class="form-control" readonly>
                                                           </div>
                                                           <div class="col-md-6 form-group">
                                                               <label type="text" name="name">ABN:</label>
                                                               <input type="text" name="name" value="{{$accounts->f_account_abn}}" class="form-control" readonly>
                                                           </div>
                                                           <div class="col-md-6 form-group">
                                                               <label type="text" name="name">Vendor #:</label>
                                                               <input type="text" name="name" value="{{$accounts->f_account_vendor}}" class="form-control" readonly>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>

                                               <div class="block block-rounded block-bordered">
                                                   <div class="block-header">
                                                       <h3 class="block-title"><i class="far fa-credit-card fa-lg"></i> Terms </h3>
                                                   </div>
                                                   <div class="block-content">
                                                           <div class="row">
                                                               <div class="col-md-6 form-group">
                                                                   <label type="text" name="name">Terms:</label>
                                                                   <input type="text" name="name" value="{{$accounts->f_account_terms}}" class="form-control" readonly>
                                                               </div>
                                                               <div class="col-md-6 form-group">
                                                                   <label type="text" name="name">Default Currency:</label>
                                                                   <input type="text" name="name" value="{{$accounts->f_account_currency}}" class="form-control" readonly>
                                                               </div>
                                                               <div class="col-md-6 form-group">
                                                                   <label type="text" name="name">Price Level:</label>
                                                                   <input type="text" name="name" value="{{$accounts->f_account_price_level}}" class="form-control" readonly>
                                                               </div>
                                                               <div class="col-md-6 form-group">
                                                                   <label type="text" name="name">Area Manager:</label>
                                                                   <input type="text" name="name" value="{{$accounts->f_account_area_manager}}" class="form-control" readonly>
                                                               </div>
                                                           </div>
                                                   </div>
                                               </div>

                                           </div>
                                           <div class="col-md-6">
                                               <!-- Overlay Map -->
                                               <div class="block block-rounded block-bordered">
                                                   <div class="block-header ">
                                                       <h3 class="block-title"><i class="fa fa-map-marker fa-lg"></i> Address:</h3>
                                                       <div class="block-options">
                                                           <button type="button" class="btn-block-option">
                                                               <i class="si si-settings"></i>
                                                           </button>
                                                       </div>
                                                   </div>
                                                   <!-- Overlay Map Container -->
{{--                                                   <div id="js-map-overlay" style="height: 600px;">--}}
                                                   <div id="map" style="height: 600px;">
                                                   </div>

{{--                                                   <script>--}}
{{--                                                       function initMap(){--}}
{{--                                                           var options = {--}}
{{--                                                               zoom:8,--}}
{{--                                                               center:{lat:42.3601,lng:-71.0589}--}}
{{--                                                           }--}}

{{--                                                           var map = new google.maps.Map(document.getElementById('map'), options);--}}
{{--                                                       }--}}
{{--                                                   </script>--}}

                                                   <div id="formatted-address"></div>
                                                   <div id="address-components"></div>

                                                   <script>
                                                       // call GeoCode see https://www.youtube.com/watch?v=pRiQeo17u6c
                                                       geocode();

                                                       function geocode(){
                                                           var location = '56 Swan Parade Warner';
                                                           axios.get('https://maps.googleapis.com/maps/api/geocode/json?', {
                                                               params:{
                                                                   address:location,
                                                                   key:'AIzaSyAikFIJY1KeAAO-o180CqzNPp8mOgRvDMo'
                                                               }
                                                           })
                                                             .then(function(response){
                                                                 //Log full response
                                                                 console.log(response);

                                                                 //Geometry
                                                                 var lat = response.data.results[0].geometry.location.lat;
                                                                 var lng = response.data.results[0].geometry.location.lng;

                                                                 var geometryOutput = `

                                                                    <ul class="list-group">
                                                                        <li class="list-group-item"><strong>${formattedAddress}</strong>:{lat}</li>
                                                                        <li class="list-group-item"><strong>${formattedAddress}</strong>:{lng}</li>
                                                                    </ul>

                                                                 `;

                                                                 // //Formatted Address
                                                                 var formattedAddress = response.data.results[0].formatted_address;
                                                                 var formattedAddressOutput = `
                                                                 <ul class="list-group">
                                                                    <li class="list-group-item">${formattedAddress}</li>
                                                                 </ul>
                                                                 `;
                                                                 //
                                                                 // //Address Components
                                                                 // var addressComponents = response.data.results[0].address_components;
                                                                 // var addressComponentsOutput = '<ul class="list-group">';
                                                                 // for(var i = 0;i < addressComponents.length;'i++'){
                                                                 //     addressComponentsOutput += `
                                                                 //     <li class="list-group-item"><strong>${addressComponents[i].types[0]}</strong>: ${addressComponents[i].long_name}</li>
                                                                 //     `;
                                                                 //     addressComponentsOutput += '</ul>';
                                                                 // }


                                                                 //Output to App
                                                                 document.getElementById('formatted-address').innerHTML =
                                                                     formattedAddressOutput;
                                                                 // document.getElementById('address-components').innerHTML =
                                                                 //     addressComponentsOutput;
                                                                 document.getElementById('geometry').innerHTML =
                                                                     geometryOutput;
                                                               })
                                                               .catch(function(error){
                                                                console.log(error);
                                                               });
                                                       }
                                                   </script>
                                               </div>
                                               <!-- END Overlay Map -->
                                           </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane" id="btabs-alt-static-contacts" role="tabpanel">
                                        <!-- Small Table -->
                                        <div class="block block-rounded block">
{{--                                            <div class="block-header block-header-default">--}}
{{--                                                <h3 class="block-title">Small Table</h3>--}}
{{--                                                <div class="block-options">--}}
{{--                                                    <div class="block-options-item">--}}
{{--                                                        <code>.table-sm</code>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <div class="block-content">
                                                <table class="table table-sm table-vcenter">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th class="d-none d-sm-table-cell">Access</th>
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td class="font-w600">
                                                                <a href="be_pages_generic_profile.html">Sara Fields</a>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="badge badge-warning">Trial</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                                                        <i class="fa fa-pencil-alt"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                                                        <i class="fa fa-times"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END Small Table -->
                                    </div>
                                    <div class="tab-pane" id="btabs-alt-static-activities" role="tabpanel">
                                        <h4 class="font-w400">Activities Content</h4>
                                        <p>...</p>
                                    </div>
                                    <div class="tab-pane" id="btabs-alt-static-invoices" role="tabpanel">
                                        <h4 class="font-w400">Invoices Content</h4>
                                        <p>...</p>
                                    </div>
                                    <div class="tab-pane" id="btabs-alt-static-invoices" role="tabpanel">
                                        <h4 class="font-w400">Purchases Content</h4>
                                        <p>...</p>
                                    </div>
                                    <div class="tab-pane" id="btabs-alt-static-invoices" role="tabpanel">
                                        <h4 class="font-w400">Locations Content</h4>
                                        <p>...</p>
                                    </div>
                                    <div class="tab-pane" id="btabs-alt-static-invoices" role="tabpanel">
                                        <h4 class="font-w400">Shipping Address Content</h4>
                                        <p>...</p>
                                    </div>
                                    <div class="tab-pane" id="btabs-alt-static-invoices" role="tabpanel">
                                        <h4 class="font-w400">Billing Groups</h4>
                                        <p>...</p>
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
    </div>

@endsection


@section('js_after')

@stop

