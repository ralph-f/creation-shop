@extends('layouts.app')

@section('title', $title)

@section( 'stylesheets' )
<link rel="stylesheet" href="{{ asset('/public/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/chartist/css/chartist.min.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/multi-select/css/multi-select.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/chartist/css/chartist.min.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" />
<link rel="stylesheet" href="{{ asset('/public/vendor/multi-select/css/multi-select.css') }}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('/public/vendor/select2/select2.css') }}" />
<!-- Air Datepicker -->
<link rel="stylesheet" href="{{ asset('/public/vendor/air-datepicker/css/datepicker.min.css') }}" />
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Manage Product Groups</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/sellers/dashboard') }}"><i class="fa fa-money"></i></a></li>
                            <li class="breadcrumb-item active">Products</li>
                            <li class="breadcrumb-item active">Manage Product Groups</li>
                        </ul>
                    </div>

                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#00c5dc" data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                            <span>Visitors</span>
                        </div>
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#f4516c" data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                            <span>Visits</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">

                            <h2>View All Groups</h2>
                            <a href="#" class="btn btn-primary btn-lg float-right" data-toggle="modal" data-target=".add-new-group-modal"><i class="fa fa-plus"></i> Add New Group</a>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-bordered table-striped table-hover dataTable js-exportable" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                    <thead>
                                        <tr role="row">

                                            <th rowspan="1" colspan="1">Title</th>
                                            <th>Products</th>
                                            <th rowspan="1" colspan="1">Option</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>

                                            <th rowspan="1" colspan="1">Title</th>
                                            <th>Products</th>
                                            <th rowspan="1" colspan="1">Option</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Group 1</td>
                                            <td><span class="badge-purple badge">PHP</span> <span class="badge-purple badge">JS</span></td>

                                            <td>
                                                <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Group 1</td>
                                            <td><span class="badge-purple badge">PHP</span> <span class="badge-purple badge">JS</span></td>

                                            <td>
                                                <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>
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

    <!-- Large Size -->
    <div class="modal fade add-new-group-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="title" id="largeModalLabel">Add a Product Group</h5>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Product Group Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Product group title">
                        </div>
                        <div class="form-group">
                            <label>Choose Payment Method(s) <span class="text-danger">*</span></label>
                            <select name="payment_method" class="form-control show-tick ms select2" multiple data-placeholder="Please select payment method">
                                <option>PayPal</option>
                                <option>Stripe</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Add Group</button>
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
@endsection