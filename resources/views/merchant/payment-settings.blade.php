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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Payment Settings</h2>
                        <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/merchants/dashboard') }}"><i class="fa fa-money"></i></a></li>                               
                            <li class="breadcrumb-item active">Settings</li>
                            <li class="breadcrumb-item active">Payment Settings</li>
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
                            <h2>Payment Settings</h2>
                        </div>

                        <div class="body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#paypal">PayPal</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#stripe">Stripe</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#payoneer">Payoneer</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#2checkout">2Checkout</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="paypal">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <h5>PayPal Settings</h5><br>
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="">PayPal Username</label>
                                                    <input type="text" class="form-control"  placeholder="Enter Your PayPal Username">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">PayPal Password</label>
                                                    <input type="password" class="form-control"  placeholder="Enter Your PayPal Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">PayPal Signature </label>
                                                    <input type="text" class="form-control"  placeholder="Enter Your PayPal Signature">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Mode</label>
                                                    <select name="" class="form-control">
                                                        <option value="">Sandbox</option>
                                                        <option value="">Live</option>
                                                    </select>
                                                </div>      
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <select name="" class="form-control">
                                                        <option value="">Active</option>
                                                        <option value="">Inactive</option>
                                                    </select>
                                                </div>                                                      
                                            
                                                <button class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>                                                                             
                                            </form>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <h5>Currency</h5><br>
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="">Choose Currency</label>
                                                    <select name="" class="form-control">
                                                        <option value="">$ US Dollar</option>
                                                        <option value="">£ Pound Sterling</option>
                                                        <option value="">€ Euro</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-primary"><i class="fa fa-check"></i> Save Changes</button>  
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="stripe">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <h5>Stripe Settings</h5><br>
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="">Stripe Publishable Key</label>
                                                    <input type="text" class="form-control"  placeholder="Enter Your Stripe Publishable Key">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Stripe Secret Key</label>
                                                    <input type="text" class="form-control"  placeholder="Enter Your Stripe Secret Key">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Mode</label>
                                                    <select name="" class="form-control">
                                                        <option value="">Sandbox</option>
                                                        <option value="">Live</option>
                                                    </select>
                                                </div>      
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <select name="" class="form-control">
                                                        <option value="">Active</option>
                                                        <option value="">Inactive</option>
                                                    </select>
                                                </div>                                                      
                                            
                                                <button class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>                                                                             
                                            </form>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <h5>Currency</h5><br>
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="">Choose Currency</label>
                                                    <select name="" class="form-control">
                                                        <option value="">$ US Dollar</option>
                                                        <option value="">£ Pound Sterling</option>
                                                        <option value="">€ Euro</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-primary"><i class="fa fa-check"></i> Save Changes</button>  
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="payoneer">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <h5>Payoneer Settings</h5><br>
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="">Payoneer API Key</label>
                                                    <input type="text" class="form-control"  placeholder="Enter Your Payoneer API Key">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Payoneer API Secret</label>
                                                    <input type="text" class="form-control"  placeholder="Enter Your Payoneer API Secret">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Mode</label>
                                                    <select name="" class="form-control">
                                                        <option value="">Sandbox</option>
                                                        <option value="">Live</option>
                                                    </select>
                                                </div>      
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <select name="" class="form-control">
                                                        <option value="">Active</option>
                                                        <option value="">Inactive</option>
                                                    </select>
                                                </div>                                                      
                                            
                                                <button class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>                                                                             
                                            </form>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <h5>Currency</h5><br>
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="">Choose Currency</label>
                                                    <select name="" class="form-control">
                                                        <option value="">$ US Dollar</option>
                                                        <option value="">£ Pound Sterling</option>
                                                        <option value="">€ Euro</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-primary"><i class="fa fa-check"></i> Save Changes</button>  
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="2checkout">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <h5>2Checkout Settings</h5><br>
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="">2Checkout API Key</label>
                                                    <input type="text" class="form-control"  placeholder="Enter Your 2Checkout API Key">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">2Checkout API Secret</label>
                                                    <input type="text" class="form-control"  placeholder="Enter Your 2Checkout API Secret">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Mode</label>
                                                    <select name="" class="form-control">
                                                        <option value="">Sandbox</option>
                                                        <option value="">Live</option>
                                                    </select>
                                                </div>      
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <select name="" class="form-control">
                                                        <option value="">Active</option>
                                                        <option value="">Inactive</option>
                                                    </select>
                                                </div>                                                      
                                            
                                                <button class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>                                                                             
                                            </form>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <h5>Currency</h5><br>
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="">Choose Currency</label>
                                                    <select name="" class="form-control">
                                                        <option value="">$ US Dollar</option>
                                                        <option value="">£ Pound Sterling</option>
                                                        <option value="">€ Euro</option>
                                                    </select>
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