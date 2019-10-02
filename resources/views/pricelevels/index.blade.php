@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Price Levels</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item active" aria-current="page">Price Levels</li>
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
                    <h3 class="block-title">Price Levels</h3>
                    <button class= "btn btn-primary" onclick="window.location.href='price-levels/create'">Create Price Level</button>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full myCustomTable">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="d-none d-sm-table-cell">Price Level</th>
                            <th class="d-none d-sm-table-cell">Status</th>
                            <th class="d-none d-sm-table-cell"></th>
                            <th class="d-none d-sm-table-cell"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pricelevel as $pricelevels)
                        <tr>
                            <td class="text-center">
                                {{$pricelevels->f_price_level_id}}
                            </td>
                            <td class="font-w600">
                                {{$pricelevels->f_price_level_name}}
                            </td>
                            <td class="font-w600">
                                {{$pricelevels->status}}
                            </td>
                            <td>
                                <a href="#">View</a>
                            </td>
                            <td>
                                <a href="#">Edit</a>
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
