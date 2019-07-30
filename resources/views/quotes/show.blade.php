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
                    <h2 class="block-title"><i class="far fa-file-code fa-lg"></i> Viewing Quote {{ $quote->quote_number }}</h2>
                    <div class="block-options">
                        <button type="button" class="btn btn-danger">
                            {{$quote->status}}
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
                                    <a class="nav-link active" href="#btabs-alt-static-summary">Quote Details +</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#btabs-alt-static-notes">Notes +</a>
                                </li>
                            </ul>
                            <div class="block block-rounded block-bordered">
                                <div class="block-content tab-content">
                                    <div class="tab-pane active" id="btabs-alt-static-summary" role="tabpanel">

                                        <div class="row" style="padding-bottom: 30px; padding-left: 30px; ">
                                            <a href="{{ route('quotes.download', $quote->id) }}" class="btn btn-sm btn-info">View PDF</a>
                                        </div>

                                        <div class="row" style="padding-bottom: 30px; padding-left: 30px; ">
                                            <table class="tg" style="table-layout: fixed; width: 277px;">
                                                <colgroup>
                                                    <col style="width: 120px">
                                                    <col style="width: 20px">
                                                    <col style="width: 120px">
                                                </colgroup>
                                                <tr>
                                                    <th class="tg-0pky">Quote Created:</th>
                                                    <th class="tg-0pky"></th>
                                                    <th class="tg-0pky">{{ $quote->quote_date }}</th>
                                                </tr>
                                                <tr>
                                                    <td class="tg-0pky">Created By</td>
                                                    <td class="tg-0pky"></td>
                                                    <td class="tg-0pky">{{$quote->user->name}}</td>
                                                </tr>
                                            </table>
                                        </div>

                                            <div class="container" style="border: 2px solid #e6ebf4; border-radius:25px; ">
                                                <div class="row clearfix" style="margin-top:20px">
                                                    <div class="col-md-12">
                                                        <div class="float-left col-md-6" style="font-size:14px;" >
                                                            <h2>{{ucfirst(trans($quote->customer->companyname))}}</h2>
                                                            <b>Quote Number: {{$quote->quote_number}}</b>
                                                            <br>
                                                            <br>
                                                            <b>Attention:</b>          {{ucfirst(trans($quote->customer->name))}}
                                                            <br>
                                                            {{ ucwords(trans($quote->customer->address)) }}
                                                            <br>
                                                             {{ $quote->customer->city . ', ' .$quote->customer->state }}
                                                            <br>
                                                            {{ $quote->customer->postcode }}
                                                            <br>
                                                            {{ $quote->customer->country }}
                                                            <br>
                                                            <br>
                                                            @if (!empty($quote->customer->phone))
                                                            <!-- If NOT empty, show phone -->
                                                                <b>Phone:</b> {{ $quote->customer->phone }}
                                                            @else
                                                            <!-- Else (if empty) show nothing / do something else -->

                                                            @endif
                                                            <br>
                                                            @if (!empty($quote->customer->email))
                                                            <!-- If NOT empty, show phone -->
                                                                <b>Email:</b> {{ $quote->customer->email }}
                                                            @else
                                                            <!-- Else (if empty) show nothing / do something else -->

                                                            @endif

                                                            @if ($quote->customer->customer_fields)
                                                                @foreach ($quote->customer->customer_fields as $field)
                                                                    <br /><br /><b>{{ $field->field_key }}</b>: {{ $field->field_value }}
                                                                @endforeach
                                                            @endif

                                                        </div>
                                                                        <div class="float-right col-md-4" style="text-align: right;">
                                                                            <img src="{{ config('quotes.logo_file') }}" width="100px" />
                                                                            <br>
                                                                            <b>{{ config('quotes.seller.name') }}</b>
                                                                            <br>
                                                                            {{ config('quotes.seller.address_1') }}
                                                                            <br>
                                                                            {{ config('quotes.seller.address_2') }}
                                                                            <br>
                                                                            @if (config('quotes.seller.email') != '')
                                                                                <b>Email</b>: {{ config('quotes.seller.email') }}
                                                                            @endif
                                                                            @if (is_array(config('quotes.seller.additional_info')))
                                                                                @foreach (config('quotes.seller.additional_info') as $key => $value)
                                                                                    <br /><br />
                                                                                    <b>{{ $key }}</b>: {{ $value }}
                                                                                @endforeach
                                                                            @endif
                                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row clearfix" style="margin-top: 20px">
                                                    <div class="col-md-12">
                                                        <table class="table table-bordered table-hover" id="tab_logic">
                                                            <thead>
                                                            <tr>
                                                                <th > # </th>
                                                                <th > Product </th>
                                                                <th > Description </th>
                                                                <th > Qty </th>
                                                                <th > Price </th>
                                                                <th > Total </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            @foreach($quote->quote_items as $item)
                                                                <tr id='addr0'>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $item->name }}</td>
                                                                    <td>{{ $item->description }}</td>
                                                                    <td>{{ $item->quantity }}</td>
                                                                    <td>${{ $item->price }}</td>
                                                                    <td>${{ number_format($item->quantity * $item->price, 2) }}</td>
                                                                </tr>
                                                            @endforeach
                                                            <tr id='addr1'></tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="clearfix" style="margin-top:20px">
                                                    <div class="float-right col-md-3">
                                                        <table class="table table-bordered table-hover" id="tab_logic_total">
                                                            <tbody>
                                                            <tr>
                                                                <th>Sub Total</th>
                                                                <td>${{ number_format($quote->test_amount, 2) }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th >Tax</th>
                                                                <td >{{ $quote->tax_percent }}%</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tax Amount</th>
                                                                <td>${{ number_format($quote->total_amount * $quote->tax_percent /100, 2) }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Grand Total</th>
                                                                <td>${{ number_format($quote->total_amount + ($quote->total_amount * $quote->tax_percent /100), 2) }}</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>

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
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Address</th>
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Phone</th>
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Mobile</th>
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Email</th>
                                                    <th class="d-none d-sm-table-cell" style="width:auto;">Address</th>
                                                    <th class="d-none d-sm-table-cell" style="width: 300px;">Notes</th>
                                                    <th style="width: 5%;"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                // we don't need to use foreach on $accounts because $accounts will always have one account
                                                // We need to use foreach for contact list since we will have an array of contacts
                                                ?>
{{--                                                @if($accounts->contact_list)--}}
{{--                                                    @foreach($accounts->contact_list as $single_contact)--}}
{{--                                                        <tr>--}}
{{--                                                            <td class="text-center">--}}
{{--                                                                {{$single_contact->f_contact_id}}--}}
{{--                                                            </td>--}}
{{--                                                            <td class="font-w600">--}}
{{--                                                                {{$single_contact->f_contact_first_name .' '.$single_contact->f_contact_last_name}}--}}
{{--                                                            </td>--}}
{{--                                                            <td class="font-w600">--}}
{{--                                                                {{$single_contact->f_contact_address_street}}--}}
{{--                                                            </td>--}}
{{--                                                            <td class="font-w600">--}}

{{--                                                            </td>--}}
{{--                                                            <td class="font-w600">--}}

{{--                                                            </td>--}}
{{--                                                            <td class="font-w600">--}}

{{--                                                            </td>--}}
{{--                                                            <td class="font-w600">--}}

{{--                                                            </td>--}}
{{--                                                            <td class="font-w600">--}}
{{--                                                            </td>--}}
{{--                                                        </tr>--}}
{{--                                                    @endforeach--}}
{{--                                                @endif--}}
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

@endsection


@section('js_after')

@stop
