@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Contacts</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!-- Page Content -->
    <div class="content">

{{--        <div class="row" style="padding-bottom: 30px;">--}}
{{--            <button class= "btn btn-primary" onclick="window.location.href='/accounts/create'">Create Account</button>--}}
{{--        </div>--}}

        <div class="row">

            <!-- Dynamic Table Full -->
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Contacts</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full myCustomTable">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th class="d-none d-sm-table-cell" >First Name</th>
                            <th class="d-none d-sm-table-cell" >Last Name</th>
                            <th class="d-none d-sm-table-cell" >Account</th>
                            <th class="d-none d-sm-table-cell" >Phone</th>
                            <th class="d-none d-sm-table-cell" >Mobile</th>
                            <th class="d-none d-sm-table-cell" >Fax</th>
                            <th class="d-none d-sm-table-cell" >Email</th>
                            <th style="width: 5%;">Status</th>
                            <th style="width: 5%;"></th>
                            <th style="width: 5%;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contact as $contacts)
                        <tr>
                            <td class="text-center">
                                <a href="contacts/view/{{$contacts->f_contact_id}}">{{$contacts->f_contact_id}}</a>
                            </td>
                            <td class="font-w600">
                                {{$contacts->f_contact_first_name}}
                            </td>
                            <td class="font-w600">
                                {{$contacts->f_contact_last_name}}
                            </td>
                            <td class="font-w600">
                                {{$contact->additionalcontacts->f_account_name}}
                            </td>
                            <td class="font-w600">
                               {{$contacts->f_contact_phone_main}}
                            </td>
                            <td class="font-w600">
                               {{$contacts->f_contact_phone_mobile}}
                            </td>
                            <td class="font-w600">
                               {{$contacts->f_contact_fax}}
                            </td>
                            <td class="font-w600">
                               {{$contacts->f_contact_email}}
                            </td>
                            <td class="font-w600">
                               {{$contacts->f_contact_status}}
                            </td>
                            <td class="font-w600">
                                <a href="/contacts/view/{{$contacts->f_contact_id}}">View</a>
{{--                                <button class= "btn btn-primary btn-sm" onclick="window.location.href='/contacts/view/{{$contacts->f_contact_id}}'">View</button>--}}
                            </td>
                            <td class="font-w600">
                                <a href="#">Edit</a>
{{--                                <button class= "btn btn-warning btn-sm" onclick="window.location.href='/contacts/view/{{$contacts->f_contact_id}}'">Edit</button>--}}
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
