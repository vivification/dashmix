@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="col-md-12">
            <div class="block block-themed bg-image">
                <div class="block-header bg-primary-dark-op">
                    <h2 class="block-title"><i class="far fa-address-card fa-lg"></i> Create New Account</h2>
                </div>

                <div class="block-content tab-content">
                    <div class="tab-pane active" id="btabs-alt-static-summary" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('accounts.store') }}" method="post">
                                    @csrf
                                    <div class="block block-rounded block-bordered">
                                        <div class="block-header">
                                            <h3 class="block-title"><i
                                                        class="far fa-address-card fa-lg"></i> Account Details </h3>
                                        </div>
                                        <div class="block-content">
                                            <div class="form-group">
                                                <label type="text" name="name">Company Name:</label>
                                                <input type="text" name='account[f_account_name]'
                                                       class="form-control" required/>
                                            </div>
                                            <div class="form-group">
                                                <label type="text" name="name">Street Address:</label>
                                                <input type="text" name='account[f_account_address_street]'
                                                       class="form-control" required/>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">City:</label>
                                                    <input type="text" name='account[f_account_city]'
                                                           class="form-control"/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">State:</label>
                                                    <input type="text" name='account[f_account_state]'
                                                           class="form-control"/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Postcode:</label>
                                                    <input type="text" name='account[f_account_postcode]'
                                                           class="form-control"/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Country:</label>
                                                    <input type="text" name='account[f_account_country]'
                                                           class="form-control"/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Phone:</label>
                                                    <input type="text" name='account[f_account_phone_primary]'
                                                           class="form-control"/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Fax:</label>
                                                    <input type="text" name='account[f_account_fax]'
                                                           class="form-control"/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Primary Email:</label>
                                                    <input type="text" name='account[f_account_email_primary]'
                                                           class="form-control" placeholder="e.g. accounts@retailquip.com"/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Company Website:</label>
                                                    <input type="text" name='account[f_account_website]'
                                                           class="form-control" placeholder="e.g. www.retailquip.com"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block block-rounded block-bordered">
                                        <div class="block-header">
                                            <h3 class="block-title"><i class="far fa-user fa-lg"></i>
                                                Contact Details</h3>
                                        </div>
                                        <div class="block-content">
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Name:</label>
                                                    <input type="text" name='contact[f_contact_first_name]' class="form-control"  required/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Last Name:</label>
                                                    <input type="text" name='contact[f_contact_last_name]' class="form-control" required/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Email:</label>
                                                    <input type="text" name='contact[f_contact_email]' class="form-control" required/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Phone:</label>
                                                    <input type="text" name='contact[f_contact_phone_main]' class="form-control" required/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Mobile:</label>
                                                    <input type="text" name='contact[f_contact_phone_mobile]' class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block block-rounded block-bordered">
                                        <div class="block-header">
                                            <h3 class="block-title"><i class="far fa fa-book fa-lg"></i>
                                                Additional Information</h3>
                                        </div>
                                        <div class="block-content">
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">ABN:</label>
                                                    <input type="text" name='account[f_account_abn]' class="form-control"  required/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Vendor #:</label>
                                                    <input type="text" name='account[f_account_vendor]' class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block block-rounded block-bordered">
                                        <div class="block-header">
                                            <h3 class="block-title"><i class="far fa fa-credit-card fa-lg"></i>
                                                Terms</h3>
                                        </div>
                                        <div class="block-content">
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Terms:</label>
                                                    <input type="text" name='account[f_contact_first_name]' class="form-control"  required/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Default Currency</label>
                                                    <input type="text" name='account[f_account_currency]' class="form-control" required/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Price Level</label>
                                                    <input type="text" name='account[f_account_price_level]' class="form-control" required/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <label type="text" name="name">Account Manager</label>
                                                    <input type="text" name='account[f_account_area_manager]' class="form-control" required/>
                                                </div>
{{--                                                <div class="col-md-3 form-group">--}}
{{--                                                    <label type="text" name="account_type">Account Type</label>--}}
{{--                                                    <select class="form-control" name="account_type">--}}
{{--                                                        <option value="client">Client</option>--}}
{{--                                                        <option value="supplier">Supplier</option>--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Create Account" style="margin-bottom: 20px;"/>
                                </form>
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
