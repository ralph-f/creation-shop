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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Security</h2>
                        <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/sellers/dashboard') }}"><i class="fa fa-money"></i></a></li>                                     
                            <li class="breadcrumb-item active">My Account</li>
                            <li class="breadcrumb-item active">Security</li>
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

                                <div class="col-lg-4 col-md-8">
                                    <h5>Two Factor Authentication</h5><br>
                                    <p>Login Method: Password</p>
                                    <form action="">
                                        <div class="form-group">
                                            <button class="btn btn-block btn-lg btn-primary custom-btn-word-wrap">Click here to enable Google Two Factor Authentication</button>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-block btn-lg btn-primary custom-btn-word-wrap">Click here to enable Email Two Factor Authentication</button>
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
<script src="{{ asset('/public/assets/bundles/libscripts.bundle.js' ) }}"></script>    
<script src="{{ asset('/public/assets/bundles/vendorscripts.bundle.js' ) }}"></script>
<script src="{{ asset('/public/assets/bundles/chartist.bundle.js' ) }}"></script>
<script src="{{ asset('/public/assets/bundles/knob.bundle.js' ) }}"></script> <!-- Jquery Knob-->
<script src="{{ asset('/public/vendor/toastr/toastr.js' ) }}"></script>
<script src="{{ asset('/public/assets/bundles/mainscripts.bundle.js' ) }}"></script>
<script src="{{ asset('/public/assets/js/index.js' ) }}"></script>
<script src="{{ asset('/public/assets/js/pages/charts/chartjs.js' ) }}"></script>
<script src="{{ asset('/public/assets/js/custom.js' ) }}"></script>
@endsection