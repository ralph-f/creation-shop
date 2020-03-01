@extends('layouts.app')

@section('title', $title)

@section( 'stylesheets' )
<link rel="stylesheet" href="{{ asset('/public/vendor/morrisjs/morris.css') }}" />
<link rel="stylesheet" href="{{ asset('/public/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/chartist/css/chartist.min.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/toastr/toastr.min.css') }}">
@endsection

@section('content')

<!-- Topbar and sidebar sub views -->
@include('subviews.site-loader')
@include('subviews.topbar')
@include('subviews.sidebar')
<!-- /Topbar and sidebar sub views -->

<div id="wrapper">
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Payments</h2>
                        <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{  url('/merchants/dashboard') }}"><i class="icon-basket-loaded"></i></a></li>                              
                            <li class="breadcrumb-item active">Payments</li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#00c5dc"
                                data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                            <span>Visitors</span>
                        </div>
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#f4516c"
                                data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                            <span>Visits</span>
                        </div>
                    </div>                      

                </div>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>View Previous Orders</h2>                            
                        </div>
                        <div class="body">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-bordered table-striped table-hover dataTable js-exportable" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                    <thead>
                                        <tr role="row">
                                            <th rowspan="1" colspan="1">Order Id</th>
                                            <th rowspan="1" colspan="1">Buyer Email</th>
                                            <th rowspan="1" colspan="1">Amount</th>
                                            <th rowspan="1" colspan="1">Payment Method</th>
                                            <th rowspan="1" colspan="1">Status</th>
                                            <th rowspan="1" colspan="1">Date</th>
                                            <th rowspan="1" colspan="1">Option</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Order Id</th>
                                            <th rowspan="1" colspan="1">Buyer Email</th>
                                            <th rowspan="1" colspan="1">Amount</th>
                                            <th rowspan="1" colspan="1">Payment Method</th>
                                            <th rowspan="1" colspan="1">Status</th>
                                            <th rowspan="1" colspan="1">Date</th>
                                            <th rowspan="1" colspan="1">Option</th>
                                        </tr>
                                    </tfoot>
                                <tbody>
                        
                                <tr role="row" class="odd">
                                        <td class="sorting_1">ORD16513213</td>
                                        <td>john@example.com</td>
                                        <td>$300</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>2008/11/28</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">ORD16513222</td>
                                        <td>tyson@example.com</td>
                                        <td>$100</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>2008/11/28</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">ORD16513213</td>
                                        <td>john@example.com</td>
                                        <td>$300</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>2008/11/28</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">ORD16513213</td>
                                        <td>john@example.com</td>
                                        <td>$300</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>2008/11/28</td>
                                        <td>N/A</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section( 'scripts' )
    <!-- Javascript -->
    <script src="{{ asset('/public/assets/bundles/libscripts.bundle.js') }}"></script>    
    <script src="{{ asset('/public/assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('/public/assets/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('/public/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/public/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/public/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('/public/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/public/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/public/assets/bundles/chartist.bundle.js') }}"></script>
    <script src="{{ asset('/public/vendor/multi-select/js/jquery.multi-select.js') }}"></script> <!-- Multi Select Plugin Js -->
    <script src="{{ asset('/public/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
    <script src="{{ asset('/public/vendor/select2/select2.min.js') }}"></script> <!-- Select2 Js -->
    <script src="{{ asset('/public/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Air Datepicker -->
    <script src="{{ asset('/public/vendor/air-datepicker/js/datepicker.js') }}"></script>
    <script src="{{ asset('/public/vendor/sweetalert/sweetalert.min.js') }}"></script> <!-- SweetAlert Plugin Js --> 
    <script src="{{ asset('/public/assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('/public/assets/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{ asset('/public/assets/js/pages/charts/chartjs.js') }}"></script>

    <script>
        $(function(){
            if( $('#data-table').length ){
                $('#data-table').DataTable();
            }

            $('.select2').select2({
                placeholder: 'Please select payment method'
            });


            $('.sparkline-pie2').sparkline('html', {
                type: 'pie',
                offset: 90,
                width: '160px',
                height: '160px',
                sliceColors: ['#05b4d8', '#35cd3a', '#716aca']
            })
        });    
    </script>
@endsection