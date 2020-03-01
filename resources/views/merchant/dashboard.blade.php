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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a></h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/merchants/dashboard') }}"><i class="icon-basket-loaded"></i></a></li>                            
                            <li class="breadcrumb-item active">Merchant Dashboard</li>
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
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card overflowhidden number-chart">
                        <div class="body">
                            <div class="number">
                                <h6>REVENUE</h6>
                                <span>$22,500</span>
                                <i class="fa fa-dollar fa-2x pull-right"></i>
                            </div>
                            <small><span class="text-success"><i class="fa fa-long-arrow-up"></i> 24%</span> last 24 hours</small><br>
                            <small><span class="text-success"><i class="fa fa-long-arrow-up"></i> 19%</span> last week</small>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                        data-line-Width="1" data-line-Color="#f79647" data-fill-Color="#fac091">1,4,1,3,7,1</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card overflowhidden number-chart">
                        <div class="body">
                            <div class="number">
                                <h6>ORDERS</h6>
                                <span>122</span>
                                <i class="fa fa-shopping-cart fa-2x pull-right"></i>
                            </div>
                            <small><span class="text-success"><i class="fa fa-long-arrow-up"></i> 24%</span> last 24 hours</small><br>
                            <small><span class="text-danger"><i class="fa fa-long-arrow-down"></i> 19%</span> last week</small>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                        data-line-Width="1" data-line-Color="#604a7b" data-fill-Color="#a092b0">1,4,2,3,6,2</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card overflowhidden number-chart">
                        <div class="body">
                            <div class="number">
                                <h6>PAYMENTS</h6>
                                <span>$21,215</span>
                                <i class="fa fa-money fa-2x pull-right"></i>
                            </div>
                            <small><span class="text-danger"><i class="fa fa-long-arrow-down"></i> 10%</span> last 24 hours</small><br>
                            <small><span class="text-danger"><i class="fa fa-long-arrow-down"></i> 5%</span> last week</small>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                        data-line-Width="1" data-line-Color="#4aacc5" data-fill-Color="#92cddc">1,4,2,3,1,5</div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h4>Next Steps</h4>
                        </div>
                        <div class="body">                            
                            <ul class="list-unstyled feeds_widget">
                                <li class="bg-info alert">
                                    <a href="#" class="display-block text-white">
                                        <div class="feeds-left"><span class="custom-counter">1</span></div>
                                        <div class="feeds-body">
                                            <h4 class="title">Complete Profile </h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="bg-info alert">
                                    <a href="#" class="display-block text-white">
                                        <div class="feeds-left"><span class="custom-counter">2</span></div>
                                        <div class="feeds-body">
                                            <h4 class="title">Configure Payment Options Profile</h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="bg-info alert">
                                    <a href="#" class="display-block text-white">
                                        <div class="feeds-left"><span class="custom-counter">3</span></div>
                                        <div class="feeds-body">
                                            <h4 class="title">Enable 2 Factor Authentication </h4>
                                        </div>
                                    </a>
                                </li>                                 
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Top Payment Systems</h2>
                        </div>
                        <div class="body">
                            <div id="stackedbar-chart" class="ct-chart"></div>
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