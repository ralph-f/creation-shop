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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Edit Coupon</h2>
                        <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/sellers/dashboard') }}"><i class="fa fa-money"></i></a></li>                           
                            <li class="breadcrumb-item active">Coupons</li>
                            <li class="breadcrumb-item active">Edit Coupon</li>
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

                        <div class="body">
                           
                            <div class="row">

                                <div class="col-lg-6 col-md-12">

                                    <form action="">
                                        <div class="form-group">
                                            <label>Product <span class="text-danger">*</span></label>
                                           <select name="payment_method" class="form-control show-tick ms select2" multiple data-placeholder="Select a product" >
                                                <option></option>
                                                <option selected>PHP</option>
                                                <option>JS</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Method(s) <span class="text-danger">*</span></label>
                                            <select name="payment_method" class="form-control show-tick ms select2" multiple data-placeholder="Please select payment method" >
                                                <option selected>PayPal</option>
                                                <option>Stripe</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Coupon Code <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="" value="CHRISMAS13513" placeholder="e.g. CHRISTMAS50PERCENTOFF">
                                        </div>
                                        <div class="form-group">
                                            <label>Discount Structure <span class="text-danger">*</span></label>
                                            <select name="" class="form-control discount-options">
                                                <option value="percent">Percent Off</option>
                                                <option value="amount">Amount Off</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Discount Value <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" value="10" placeholder="Disount value" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="discount-type">% Off</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Expire Date <span class="text-danger">*</span></label>
                                            <input type="text" value="2019-03-28 12:47 am" class="datepicker-here form-control" data-timepicker="true" data-time-format='hh:ii aa'  name="" placeholder="Expiry date">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Number of Uses <span class="text-danger">*</span></label>
                                            <input type="number"  class="form-control" value="0" name="" placeholder="Number of uses">
                                        </div>
                                        <button class="btn btn-primary"><i class="fa fa-check"></i> Save Changes</button>
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