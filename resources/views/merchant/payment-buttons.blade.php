@extends('layouts.app')

@section('title', $title)

@section( 'stylesheets' )
<link rel="stylesheet" href="{{ asset('/public/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" />
<link rel="stylesheet" href="{{ asset('/public/vendor/multi-select/css/multi-select.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/nouislider/nouislider.min.css') }}" />
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('/public/vendor/select2/select2.css') }}" />
<!-- Demo CSS not Include in project -->
<style>
    .demo-card label{ display: block; position: relative;}
    .demo-card .col-lg-4{ margin-bottom: 30px;}
</style>
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Payment Buttons</h2>
                        <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/merchants/dashboard') }}"><i class="icon-basket-loaded"></i></a></li>                               
                            <li class="breadcrumb-item active">Accept Payments</li>
                            <li class="breadcrumb-item active">Payment Buttons</li>
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

                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <p class="alert custom-info-alert">You can easily accept payments or donations on your existing <strong>Wix, WordPress, Weebly, custom website and more.</strong> All you have to do is copy and paste the code from the textbox and voila.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="">Choose a Price</label>
                                                    <input type="number" class="form-control" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="The price the buyer will pay on checkout." name="current_password" placeholder="The price the buyer will pay on checkout.">
                                                </div>
                                                <div class="form-group" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="The buyer will be able to choose from these payment methods.">
                                                    <label>Choose Payment Method(s)</label>
                                                    <select name="payment_method" class="form-control show-tick ms select2" multiple data-placeholder="Please select payment method" >
                                                        <option>PayPal</option>
                                                        <option>Stripe</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Browser Redirect URL (optional)</label>
                                                    <input type="text" class="form-control" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="The URL to redirect the buyer to after payment." name="" placeholder="URL to redirect buyer to after purchase.">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">IPN URL (optional)</label>
                                                    <input type="text" class="form-control" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="The URL to send purchase notifications to. Learn more here.." name="" placeholder="Server URL to send order notification to.">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Customer Information</label>
                                                    <div class="fancy-checkbox">
                                                        <label><input type="checkbox"><span>Collect Buyer's Shipping Address</span></label>
                                                    </div>
                                                </div>
                            
                                            </form>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="">Preview Button</label>
                                                <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="form-group">
                                                
                                                <button class="btn btn-primary btn-lg">Buy Now</button>
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
@endsection

@section( 'scripts' )
    <!-- Javascript -->
    <script src="{{ asset('/public/assets/bundles/libscripts.bundle.js') }}"></script>    
    <script src="{{ asset('/public/assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('/public/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script> <!-- Bootstrap Colorpicker Js --> 
    <script src="{{ asset('/public/vendor/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script> <!-- Input Mask Plugin Js --> 
    <script src="{{ asset('/public/vendor/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('/public/vendor/multi-select/js/jquery.multi-select.js') }}"></script> <!-- Multi Select Plugin Js -->
    <script src="{{ asset('/public/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
    <script src="{{ asset('/public/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/public/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script> <!-- Bootstrap Tags Input Plugin Js --> 
    <script src="{{ asset('/public/vendor/nouislider/nouislider.js') }}"></script> <!-- noUISlider Plugin Js --> 
    <script src="{{ asset('/public/vendor/select2/select2.min.js') }}"></script> <!-- Select2 Js -->
    <script src="{{ asset('/public/assets/bundles/mainscripts.bundle.js') }}"></script>
    <script>
    $('.select2').select2({
        placeholder: 'Please select payment method'
    });    
    </script>
@endsection