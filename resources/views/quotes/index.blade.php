@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Quotes</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item active" aria-current="page">Quotes</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!-- Page Content -->
    <div class="content">
            <div class="row" style="padding-bottom: 30px;">
                <button class= "btn btn-primary" onclick="window.location.href='/quotes/create'">Create Quote</button>
            </div>

            <!-- Dynamic Table Full -->
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Quotes</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full myCustomTable">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th class="d-none d-sm-table-cell">Quote Number</th>
                            <th class="d-none d-sm-table-cell">Job Number</th>
                            <th class="d-none d-sm-table-cell">Quote Date</th>
                            <th class="d-none d-sm-table-cell">Customer</th>
                            <th class="d-none d-sm-table-cell">Tax Percent</th>
                            <th class="d-none d-sm-table-cell">Status</th>
                            <th class="d-none d-sm-table-cell">Created</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($quotes as $quote)
                        <tr>
                            <td class="text-center">
                                <a href="accounts/view/{{$quote->id}}">{{$quote->id}}</a></td>
                            <td class="font-w600">
                                <a href="accounts/view/{{$quote->id}}">{{$quote->quote_number}}</a>
                            </td>
                            <td class="font-w600">
                                {{$quote->job_number}}
                            </td>
                            <td class="font-w600">
                                {{$quote->quote_date}}
                            </td>
                            <td class="font-w600">
                                {{$quote->customer_id}}
                            </td>
                            <td class="font-w600">
                                {{$quote->tax_percent}}
                            </td>
                            <td class="font-w600">
                                {{$quote->status}}
                            </td>
                            <td class="font-w600">
                                {{$quote->created_at}}
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
