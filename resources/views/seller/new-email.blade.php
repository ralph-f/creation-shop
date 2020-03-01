@extends('layouts.app')

@section('title', $title)

@section( 'stylesheets' )
<link rel="stylesheet" href="{{ asset('/public/vendor/summernote/dist/summernote.css') }}"/>
<link rel="stylesheet" href="{{ asset('/public/vendor/dropify/css/dropify.min.css') }}">
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> New Email</h2>
                        <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/sellers/dashboard') }}"><i class="fa fa-money"></i></a></li>                                    
                            <li class="breadcrumb-item active">Marketing</li>
                            <li class="breadcrumb-item active">New Email</li>
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

                                    <form action="">
                                        <div class="form-group">
                                            <label>From <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="" disabled placeholder="seller@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Select Buyers you'd like to e-mail <span class="text-danger">*</span></label>
                                            <select name="" class="form-control show-tick ms select2" data-placeholder="Please select buyers" >
                                                <option></option>
                                                <option>All Buyers</option>
                                                <option>All Buyers who didn't go through with purchase</option>
                                            </select>
                                        </div>

                                        <div class="form-grou">
                                            <label for="">Subject  <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Text">
                                        </div>

                                        <div class="form-group form-float">
                                            <label for="">Product Description</label>
                                            <div class="summernote" required> </div>
                                        </div>
                                       
                                        
                                        <button class="btn btn-primary"><i class="fa fa-send"></i> Send</button>
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
<script src="{{ asset('/public/vendor/jquery-validation/jquery.validate.js') }}"></script> <!-- Jquery Validation Plugin Css -->
<script src="{{ asset('/public/vendor/jquery-steps/jquery.steps.js') }}"></script> <!-- JQuery Steps Plugin Js -->
<script src="{{ asset('/public/vendor/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('/public/vendor/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script> <!-- Input Mask Plugin Js --> 
<script src="{{ asset('/public/vendor/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('/public/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('/public/assets/js/pages/forms/form-wizard.js') }}"></script>
<script src="{{ asset('/public/vendor/summernote/dist/summernote.js') }}"></script>
<script src="{{ asset('/public/assets/js/pages/forms/dropify.js') }}"></script>
<script src="{{ asset('/public/assets/js/pages/forms/advanced-form-elements.js') }}"></script>
@endsection