@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Accounts</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item active" aria-current="page">Accounts</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <!-- Dynamic Table Full -->
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Accounts</h3>
                    <button class= "btn btn-primary" onclick="window.location.href='/accounts/create'">Create Account</button>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full myCustomTable">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th class="d-none d-sm-table-cell" >Company Name</th>
                            <th class="d-none d-sm-table-cell" >Client Type</th>
                            <th class="d-none d-sm-table-cell" >Contact</th>
                            <th class="d-none d-sm-table-cell" >Phone</th>
                            <th class="d-none d-sm-table-cell" >Email</th>
                            <th class="d-none d-sm-table-cell" >Website</th>
                            <th class="d-none d-sm-table-cell" >Address</th>
                            <th style="width: 5%;">Status</th>
                            <th style="width: 5%;"></th>
                            <th style="width: 5%;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($accounts as $account)
                        <tr>
                            <td class="text-center">
                                <a href="accounts/view/{{$account->id}}">{{$account->id}}</a></td>
                            <td class="font-w600">
                                <a href="accounts/view/{{$account->id}}">{{$account->f_account_name}}</a>
                            </td>
                            <td class="font-w600">
                                @if($account->account_type)
                                    {{$account->account_type->f_account_type_name}}
                                @endif
                            </td>
                            <td class="font-w600">
                                @if($account->contact_primary)
                                    {{-- No such field 'f_account_contact_primary' exists in table f_contact, after relation you need to call the db column that actuall exists  --}}
                                    {{-- {{$account->contact_primary->f_account_contact_primary}}--}}
                                    {{-- Add first_name just for example --}}

                                    {{--  if you ever want to access column details of other table via relation, you will have to follow this workflow.--}}

                                    {{-- $variable-> relation_name-> column_name (secondary_table/other_table, then the column name)--}}

                                    {{$account->contact_primary->f_contact_first_name .' '.$account->contact_primary->f_contact_last_name}}
                                @endif
                            </td>
                            <td class="font-w600">
                                {{$account->f_account_phone_primary}}
                            </td>
                            <td class="font-w600">
                                {{$account->f_account_email_primary}}
                            </td>
                            <td class="font-w600">
                                {{$account->f_account_website}}
                            </td>
                            <td class="font-w600">
                                {{$account->f_account_address_street}}
                            </td>
                            <td class="font-w600">
                                @if($account->account_status)
                                    {{$account->account_status->f_account_status_name}}
                                @endif
                            </td>
                            <td class="font-w600">
                                <a href="accounts/view/{{$account->id}}">View</a>
{{--                                <button class= "btn btn-primary btn-sm" onclick="window.location.href='accounts/view/{{$account->id}}'">View</button>--}}
                            </td>
                            <td class="font-w600">
                                <a href="#">Edit</a>
{{--                                <button class= "btn btn-warning btn-sm" onclick="window.location.href='accounts/view/{{$account->id}}'">Edit</button>--}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table Full -->
{{--            </div>--}}
        </div>
    </div>
    <!-- END Page Content -->
    <!-- Page JS Plugins -->

@endsection
