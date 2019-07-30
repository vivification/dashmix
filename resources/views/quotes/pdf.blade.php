@extends('layouts.pdf')

@section('content')

<div class="clearfix">
    <div style="float: right;">
        <img src="{{URL::asset('/assets/retailquip.png') }}" width="150px" /><br>
        <b>ABN: {{ config('quotes.ABN') }}</b>
        <br>
        <br>
        <h2 style="font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: red;"><b>Quote {{ $quote->quote_number }}</b></h2>
        <b>Date Created:</b> {{ $quote->quote_date }}<br>
        <b>Created By:</b> {{ $quote->user->name }}
    </div>
</div>

<div class="clearfix mt-3">
    <div class="float-left">
        <h3 style="font-family: Arial, Helvetica, sans-serif; font-weight: bold; ">{{ucfirst(trans($quote->customer->companyname))}}</h3>
        <b>Attention:</b>          {{ ucfirst($quote->customer->name)}}
        <br>
        <b>Address:</b>     {{ $quote->customer->address. ', ' . $quote->customer-> city. ', ' . $quote->customer->state . ' ' . $quote->customer->postcode}}
        <br>
        <b>Country:</b>     {{ $quote->customer->country }}
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
        <br>
        <br>
    </div>

</div>

<div class="col-md-12">
    <br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th class="text-center"> # </th>
            <th class="text-center"> Product </th>
            <th class="text-center"> Description </th>
            <th class="text-center"> Qty </th>
            <th class="text-center"> Price </th>
            <th class="text-center"> Total </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($quote->quote_items as $item)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $item->name }}</td>
                <td class="text-center">{{ $item->description }}</td>
                <td class="text-center">{{ number_format($item->quantity, 0) }}</td>
                <td class="text-center">${{ $item->price }}</td>
                <td class="text-center">${{ number_format($item->quantity * $item->price, 2) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="col-sm-3" style="float: right; width: 300px;">
    <div style="float: right; width: 300px;">
        <table class="table table-bordered table-hover" id="tab_logic_total">
            <tbody>
            <colgroup>
                <col style="width: 120px">
                <col style="width: 20px">
                <col style="width: 120px">
                <col style="width: 120px">
            </colgroup>
            <tr>
                <th class="text-right">Sub Total:</th>
                <td class="text-right">${{ number_format($quote->total_amount, 2) }}</td>
            </tr>
            <tr>
                <th class="text-right">Tax:</th>
                <td class="text-right">{{ $quote->tax_percent }}%</td>
            </tr>
            <tr>
                <th class="text-right">Tax Amount:</th>
                <td class="text-right">${{ number_format($quote->total_amount * $quote->tax_percent /100, 2) }}</td>
            </tr>
            <tr>
                <th class="text-right">Grand Total:</th>
                <td class="text-right">${{ number_format($quote->total_amount + ($quote->total_amount * $quote->tax_percent /100), 2) }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="clearfix mt-3">
    {{ config('quote.footer_text') }}
</div>

@endsection
