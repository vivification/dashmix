@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="col-md-12">
            <div class="block block-themed bg-image">
                <div class="block-header bg-primary-dark-op">
                    <h2 class="block-title"><i class="far fa-address-card fa-lg"></i> Create New Quote</h2>
                    <div class="block-options">
                        {{--                        <button type="button" class="btn btn-success">--}}
                        {{--                            @if($accounts->account_status)--}}
                        {{--                                {{$accounts->account_status->f_account_status_name}}--}}
                        {{--                            @endif--}}
                        {{--                        </button>--}}
                    </div>
                </div>

                <!-- Block Tabs -->
                <div class="row">
                    <div class="col-lg-12 accounts-wrapper">

                        <!-- Block Tabs Default Style -->
                        <div class="block block-rounded block-bordered">
                            <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#btabs-alt-static-summary">New Customer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#btabs-alt-static-contacts">Existing Customer</a>
                                </li>
                            </ul>
                            <div class="block block-rounded block-bordered">
                                <div class="block-content tab-content">
                                    <div class="tab-pane active" id="btabs-alt-static-summary" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="{{ route('quotes.store') }}" method="post">
                                                    @csrf
                                                <div class="block block-rounded block-bordered">
                                                    <div class="block-header">
                                                        <h3 class="block-title"><i
                                                                    class="far fa-address-card fa-lg"></i> Customer
                                                            Details </h3>
                                                    </div>
                                                    <div class="block-content">
                                                        <div class="form-group">
                                                            <label type="text" name="name">Company Name:</label>
                                                            <input type="text" name='customer[companyname]'
                                                                   class="form-control" required/>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Customer Name:</label>
                                                                <input type="text" name='customer[name]'
                                                                       class="form-control" required/>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Email:</label>
                                                                <input type="email" name='customer[email]'
                                                                       class="form-control"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label type="text" name="name">Street Address:</label>
                                                            <input type="text" name='customer[address]'
                                                                   class="form-control" required/>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">City:</label>
                                                                <input type="text" name='customer[city]'
                                                                       class="form-control"/>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">State:</label>
                                                                <input type="text" name='customer[state]'
                                                                       class="form-control"/>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Postcode:</label>
                                                                <input type="text" name='customer[postcode]'
                                                                       class="form-control"/>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label type="text" name="name">Country:</label>
                                                                <input type="text" name='customer[country]'
                                                                       class="form-control"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="block block-rounded block-bordered">
                                                    <div class="block-header">
                                                        <h3 class="block-title"><i class="far fa-credit-card fa-lg"></i>
                                                            Quote Details</h3>
                                                    </div>
                                                    <div class="block-content">
                                                        <div class="row">
                                                            <div class="col-md-3 form-group">
                                                                <label type="text" name="name">Quote Date:</label>
                                                                <input type="text" name='quote[quote_date]' class="form-control" value="{{ date('Y-m-d') }}" required/>
                                                            </div>
                                                            <div class="col-md-3 form-group">
                                                                <label type="text" name="name">Quote Terms:</label>
                                                                <input type="text" name='quote[terms]' class="form-control" required/>
                                                            </div>
                                                            <div class="col-md-3 form-group">
                                                                <label type="text" name="name">Job Number:</label>
                                                                <input type="text" name='quote[job_number]' class="form-control" required/>
                                                            </div>
                                                            <div class="col-md-3 form-group">
                                                                <label type="text" name="name">Description:</label>
                                                                <input type="text" name='quote[description]' class="form-control" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="block block-rounded block-bordered">
                                                    <div class="block-header">
                                                        <h3 class="block-title"><i class="far fa-credit-card fa-lg"></i>
                                                            Charges</h3>
                                                    </div>
                                                    <div class="block-content">
                                                        <div class="row">

                                                            <div class="col-md-12" style="padding-top: 30px;">
                                                                <table class="table table-bordered table-hover" id="tab_logic">
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
                                                                    <tr id='addr0'>
                                                                        <td>1</td>
                                                                        <td><input type="text" name='product[]'  placeholder='Enter Product Name' class="form-control"/></td>
                                                                        <td><input type="text" name='description[]'  placeholder='Product Description' class="form-control"/></td>
                                                                        <td><input type="number" name='qty[]' placeholder='Enter Qty' class="form-control qty" step="0" min="0"/></td>
                                                                        <td><input type="number" name='price[]' placeholder='Enter Unit Price' class="form-control price" step="0.00" min="0"/></td>
                                                                        <td><input type="number" name='total[]' placeholder='0.00' class="form-control total" readonly/></td>
                                                                    </tr>
                                                                    <tr id='addr1'></tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="row clearfix">
                                                            <div class="col-md-12">
                                                                <button id="add_row" type="button" class="btn btn-primary float-left">Add Row</button>
                                                                <button id='delete_row' class="btn btn-info float-right">Delete Row</button>
                                                            </div>
                                                        </div>

                                                        <div class="row clearfix" style="margin-top:20px">
                                                            <div class="col-md-12">
                                                                <div class="float-right col-md-4">
                                                                    <table class="table table-bordered table-hover" id="tab_logic_total">
                                                                        <tbody>
                                                                        <tr>
                                                                            <th class="text-center">Sub Total</th>
                                                                            <td class="text-center"><input type="number" name='sub_total' placeholder='0.00' class="form-control" id="sub_total" readonly/></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-center">Tax</th>
                                                                            <td class="text-center"><div class="input-group mb-2 mb-sm-0">
                                                                                    <input type="number" class="form-control" id="tax" placeholder="0" name="quote[tax_percent]">
                                                                                    <div class="input-group-addon">%</div>
                                                                                </div></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-center">Tax Amount</th>
                                                                            <td class="text-center"><input type="number" name='tax_amount' id="tax_amount" placeholder='0.00' class="form-control" readonly/></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-center">Grand Total</th>
                                                                            <td class="text-center"><input type="number" name='total_amount' id="total_amount" placeholder='0.00' class="form-control" readonly/></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <input type="submit" class="btn btn-primary" value="Save Quote" />
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    <script>
        $(document).ready(function(){
            var i=1;
            $("#add_row").click(function()
            {
                b=i-1;
                $('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
                $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
                i++;
            });
            $("#delete_row").click(function(){
                if(i>1){
                    $("#addr"+(i-1)).html('');
                    i--;
                }
                calc();
            });

            $('#tab_logic tbody').on('keyup change',function(){
                calc();
            });
            $('#tax').on('keyup change',function(){
                calc_total();
            });


        });

        function calc()
        {
            $('#tab_logic tbody tr').each(function(i, element) {
                var html = $(this).html();
                if(html!='')
                {
                    var qty = $(this).find('.qty').val();
                    var price = $(this).find('.price').val();
                    $(this).find('.total').val(qty*price);

                    calc_total();
                }
            });
        }

        function calc_total()
        {
            total=0;
            $('.total').each(function() {
                total += parseInt($(this).val());
            });
            $('#sub_total').val(total.toFixed(2));
            tax_sum=total/100*$('#tax').val();
            $('#tax_amount').val(tax_sum.toFixed(2));
            $('#total_amount').val((tax_sum+total).toFixed(2));
        }
    </script>
@stop

@section('js_after')

@stop
