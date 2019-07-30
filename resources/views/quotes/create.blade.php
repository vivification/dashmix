@extends('layouts.backend')

@section('content')


{{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>--}}
{{--    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
    <!------ Include the above in your HEAD tag ---------->

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Create New Quote</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">App</li>
                    <li class="breadcrumb-item active" aria-current="page">Quote</li>
                </ol>
            </nav>
        </div>
    </div>
</div>



<div class="content">

    <div class="row" style="padding-bottom: 30px;">
        <button class= "btn btn-primary" onclick="window.location.href='/quotes'">Back</button>
    </div>


    <form action="{{ route('quotes.store') }}" method="post">
        @csrf

    <div class="row">
        <div class="col-md-3">
{{--            Quote Number:--}}
{{--            <br>--}}
{{--            <input type="text" name='quote[quote_number]' class="form-control" placeholder="RTQ" required />--}}
            Quote Date:
            <br>
            <input type="text" name='quote[quote_date]' class="form-control" value="{{ date('Y-m-d') }}" required />
            Job Number:
            <br>
            <input type="text" name='quote[job_number]' class="form-control" />
        </div>
    </div>

    <div class="container">
        <div class="row clearfix">
            <div class="col-md-6" style="margin-top:20px">
                Company Name*: <input type="text" name='customer[companyname]' class="form-control" required />
                Name*: <input type="text" name='customer[name]' class="form-control" required />
                Address*: <input type="text" name='customer[address]' class="form-control" required />
                Postcode/ZIP: <input type="text" name='customer[postcode]' class="form-control" />
                City*: <input type="text" name='customer[city]' class="form-control" required />
                State: <input type="text" name='customer[state]' class="form-control" />
                Country*: <input type="text" name='customer[country]' class="form-control" required />
                Phone: <input type="text" name='customer[phone]' class="form-control" />
                Email: <input type="email" name='customer[email]' class="form-control" />
                <br />
            </div>

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

@endsection
{{--no section exist with the name javascript --}}
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
