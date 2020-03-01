@extends('layouts.app')

@section('title', $title)

@section( 'stylesheets' )
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Affiliate Payouts</h2>
                        <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/sellers/dashboard') }}"><i class="fa fa-money"></i></a></li>                                    
                            <li class="breadcrumb-item active">Affiliates</li>
                            <li class="breadcrumb-item active">Affiliate Payouts</li>
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
                            
                            <h2>View Affiliate Payouts</h2>
                            <a href="#" class="btn btn-primary btn-lg float-right" data-toggle="modal"  data-target=".add-new-group-modal"><i class="fa fa-plus"></i> Add Payout Log</a>                            
                        </div>
                        <div class="body">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-bordered table-striped table-hover dataTable js-exportable" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                    <thead>
                                        <tr role="row">
                                            <th rowspan="1" colspan="1">Affiliate Username</th>
                                            <th rowspan="1" colspan="1">Amount</th>
                                            <th rowspan="1" colspan="1">Payment Method</th>
                                            <th rowspan="1" colspan="1">Transaction ID</th>
                                            <th rowspan="1" colspan="1">Notes</th>
                                            <th rowspan="1" colspan="1">Date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Affiliate Username</th>
                                            <th rowspan="1" colspan="1">Amount</th>
                                            <th rowspan="1" colspan="1">Payment Method</th>
                                            <th rowspan="1" colspan="1">Transaction ID</th>
                                            <th rowspan="1" colspan="1">Notes</th>
                                            <th rowspan="1" colspan="1">Date</th>
                                        </tr>
                                    </tfoot>
                                <tbody>
                        
                        
                                    
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Large Size -->
    <div class="modal fade add-new-group-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="title" id="largeModalLabel">Add Payout Log</h5>
                </div>
                <form>
                    <div class="modal-body"> 
                        <div class="form-group">
                            <label for="">Affiliate Username <span class="text-danger">*</span></label>
                            <select name="" class="form-control">
                                <option value="">johndoe123</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Affiliate Username <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" placeholder="e.g. 12.20">
                        </div>
                        <div class="form-group">
                            <label>Payment Method <span class="text-danger">*</span></label>
                            <select name="payment_method" class="form-control show-tick ms select2" data-placeholder="Please select payment method" >
                                <option>PayPal</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Transaction ID <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="PayPal Transaction ID">
                        </div>

                        <div class="form-group">
                            <label for="">Notes</label>
                        <input type="text" class="form-control" placeholder="PayPal Transaction ID">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Log Payment</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>
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
<script src="{{ asset('/public/vendor/sweetalert/sweetalert.min.js') }}"></script> <!-- SweetAlert Plugin Js --> 
<script src="{{ asset('/public/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('/public/assets/js/pages/tables/jquery-datatable.js') }}"></script>
@endsection