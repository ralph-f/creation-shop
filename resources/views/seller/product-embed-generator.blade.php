@extends('layouts.app')

@section('title', $title)

@section( 'stylesheets' )
<link rel="stylesheet" href="{{ asset('/public/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" />
<link rel="stylesheet" href="{{ asset('/public/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/multi-select/css/multi-select.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/chartist/css/chartist.min.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
<link rel="stylesheet" href="{{ asset('/public/vendor/toastr/toastr.min.css') }}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('/public/vendor/select2/select2.css') }}" />
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Product Embed Generator</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/sellers/dashboard') }}"><i class="fa fa-money"></i></a></li>
                            <li class="breadcrumb-item active">Products</li>
                            <li class="breadcrumb-item active">Product Embed Generator</li>
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

                        <div class="body">

                            <div class="row">

                                <div class="col-lg-6 col-md-12">
                                    <p class="alert custom-info-alert">You can embed your product on your existing <strong>Wix, WordPress, Weebly, custom website and more.</strong> All you have to do is copy and paste the code from the textbox.</p>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <form>
                                        <div class="row">

                                            <div class="col-lg-6 ">
                                                <div class="form-group">
                                                    <label>Product <span class="text-danger">*</span></label>
                                                    <select name="payment_method" class="form-control show-tick ms select2" multiple data-placeholder="Select Products">
                                                        <option>PHP</option>
                                                        <option>JS</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Choose button width <small>(advanced)</small></label>
                                                    <div class="input-group mb-3">

                                                        <input type="number" class="form-control embed-button-width" value="200" placeholder="Button width" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">Pixels</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Choose button text</label>
                                                    <input type="text" value="Buy Now" class="form-control button-text" placeholder="Button text">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Choose button text</label>
                                                    <div class="input-group colorpicker">
                                                        <input type="text" class="form-control" value="#00AABB">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><span class="input-group-addon"> <i></i> </span></span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="">Embed Code</label>
                                                    <p class="form-control embed-code-container"></p>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="fancy-checkbox">
                                                        <label>
                                                            <input type="checkbox" name="show_price_on_button" class="show-price-on-button" value="price_on_button"><span>Show Price on Button</span></label>
                                                    </div>
                                                </div>
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
@endsection

@section( 'scripts' )
<!-- Javascript -->
<script src="{{ asset('/public/assets/bundles/libscripts.bundle.js') }}"></script>    
<script src="{{ asset('/public/assets/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('/public/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script> <!-- Bootstrap Colorpicker Js --> 
<script src="{{ asset('/public/assets/bundles/chartist.bundle.js') }}"></script>
<script src="{{ asset('/public/assets/bundles/knob.bundle.js') }}"></script> <!-- Jquery Knob-->
<script src="{{ asset('/public/vendor/toastr/toastr.js') }}"></script>
<script src="{{ asset('/public/vendor/multi-select/js/jquery.multi-select.js') }}"></script> <!-- Multi Select Plugin Js -->
<script src="{{ asset('/public/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('/public/vendor/select2/select2.min.js') }}"></script> <!-- Select2 Js -->
<script src="{{ asset('/public/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('/public/assets/js/index.js') }}"></script>
<script>
$('.select2').select2({
    placeholder: 'Select Products'
});

$('.colorpicker').colorpicker();
</script>
@endsection