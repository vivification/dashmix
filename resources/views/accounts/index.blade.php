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
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full myCustomTable">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th class="d-none d-sm-table-cell" style="width: 300px;">Company Name</th>
                            <th class="d-none d-sm-table-cell" style="width:auto;">Client Type</th>
                            <th class="d-none d-sm-table-cell" style="width:auto;">Contact</th>
                            <th class="d-none d-sm-table-cell" style="width:auto;">Phone</th>
                            <th class="d-none d-sm-table-cell" style="width:auto;">Email</th>
                            <th class="d-none d-sm-table-cell" style="width:auto;">Fax</th>
                            <th class="d-none d-sm-table-cell" style="width:auto;">Website</th>
                            <th class="d-none d-sm-table-cell" style="width: 300px;">Address</th>
                            <th style="width: 15%;">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($accounts as $account)
                        <tr>
                            <td class="text-center">
                                <a href="accounts/view/{{$account->id}}">{{$account->id}}</a></td>
                            <td class="font-w600">
                                <a href="#">{{$account->f_account_name}}</a>
                            </td>
                            <td class="font-w600">
                                @if($account->account_type)
                                    {{$account->account_type->f_account_type_name}}
                                @endif
                            </td>
                            <td class="font-w600">
                                @if($account->contact_primary)
                                    {{$account->contact_primary->f_account_contact_primary}}
                                @endif
                            </td>
                            <td class="font-w600">
                                {{$account->f_account_phone_primary}}
                            </td>
                            <td class="font-w600">
                                {{$account->f_account_email_primary}}
                            </td>
                            <td class="font-w600">
                                {{$account->f_account_fax}}
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
                        </tr>
                        @endforeach
                        </tbody>
{{--                            <td class="d-none d-sm-table-cell">--}}
{{--                                client1<em class="text-muted">@example.com</em>--}}
{{--                            </td>--}}
{{--                            <td class="d-none d-sm-table-cell">--}}
{{--                                <span class="badge badge-success">VIP</span>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <em class="text-muted">9 days ago</em>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
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
