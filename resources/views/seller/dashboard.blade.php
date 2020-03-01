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
                        <li class="breadcrumb-item"><a href="{{ url('/sellers/dashboard') }}"><i class="fa fa-money"></i></a></li>                                       
                            <li class="breadcrumb-item active">Seller Dashboard</li>
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
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>456 <i class="icon-basket-loaded float-right"></i></h3>
                            <span>Sales</span>                            
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-blue m-b-0">
                            <div class="progress-bar" data-transitiongoal="64"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>235 <i class="icon-user-follow float-right"></i></h3>
                            <span>New Customers</span>                    
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-purple m-b-0">
                            <div class="progress-bar" data-transitiongoal="67"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>2,318 <i class="fa fa-dollar float-right"></i></h3>
                            <span>Revenue</span>       
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-yellow m-b-0">
                            <div class="progress-bar" data-transitiongoal="89"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>68% <i class=" icon-heart float-right"></i></h3>
                            <span>Customer Satisfaction</span>        
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-green m-b-0">
                            <div class="progress-bar" data-transitiongoal="68"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row clearfix">

                <div class="col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="header">
                                    <h2>Visitors</h2>
                                   
                                </div>
                                <div class="body">
                                    <ul class="list-unstyled list-referrals">
                                        <li>
                                            <p><span class="value">2301</span><span class="text-muted float-right">visits from Facebook</span></p>
                                            <div class="progress progress-xs progress-transparent custom-color-blue">
                                                <div class="progress-bar" data-transitiongoal="87"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <p><span class="value">2107</span><span class="text-muted float-right">visits from Twitter</span></p>
                                            <div class="progress progress-xs progress-transparent custom-color-purple">
                                                <div class="progress-bar" data-transitiongoal="34"></div>
                                            </div>
                                        </li>                                
                                        <li>
                                            <p><span class="value">2308</span><span class="text-muted float-right">visits from Search</span></p>
                                            <div class="progress progress-xs progress-transparent custom-color-yellow">
                                                <div class="progress-bar" data-transitiongoal="54"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <p><span class="value">1024</span><span class="text-muted float-right">visits from Affiliates</span></p>
                                            <div class="progress progress-xs progress-transparent custom-color-green">
                                                <div class="progress-bar" data-transitiongoal="67"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="header">
                                    <h2>Total Revenue</h2>
                                </div>
                                <div class="body text-center">
                                    <h4 class="margin-0">Total Sale</h4>
                                    <h6 class="m-b-20">456</h6>
                                    <input type="text" class="knob" value="63" data-width="100" data-height="100" data-thickness="0.25" data-angleArc="250" data-angleoffset="-125" data-fgColor="#212121" readonly>                            
                                    <div class="sparkline" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="6" data-bar-Spacing="6" data-bar-Color="#7460ee">2,5,4,8,3,9,1,5</div>
                                    <h6 class="p-b-15">Weekly Earnings</h6>
                                    <div class="sparkline" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="2" data-bar-Spacing="4" data-bar-Color="#11a0f8">3,1,5,4,7,8,2,3,1,4,6,5,4,4,2,3,1,5,4,7,8,2,3,1,4,6,5,4,4,2</div>
                                    <h6>Monthly Earnings</h6>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>Sales</h2>
                        </div>
                        <div class="body">
                            <div id="line-chart" class="ct-chart"></div>

                        </div>
                    </div>
                </div>

            </div> 

            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>New Orders</h2>
                        </div>
                        <div class="body">
                            <table class="table table-hover">
                                <thead class="thead-success">
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Customers</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>IPONE-7</td>
                                        <td>
                                            <ul class="list-unstyled team-info margin-0">                                                
                                                <li><img src="{{ asset('/public/images/xs/avatar1.jpg' ) }}" title="Avatar" alt="Avatar"></li>
                                                <li><img src="{{ asset('/public/images/xs/avatar6.jpg' ) }}" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>$ 356</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>NOKIA-8</td>
                                        <td>
                                            <ul class="list-unstyled team-info margin-0">                                                
                                                <li><img src="{{ asset('/public/images/xs/avatar1.jpg' ) }}" title="Avatar" alt="Avatar"></li>                                                
                                                <li><img src="{{ asset('/public/images/xs/avatar5.jpg' ) }}" title="Avatar" alt="Avatar"></li>
                                                <li><img src="{{ asset('/public/images/xs/avatar9.jpg' ) }}" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>$ 542</td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>IPONE-7</td>
                                        <td>
                                            <ul class="list-unstyled team-info margin-0">                                                
                                                <li><img src="{{ asset('/public/images/xs/avatar5.jpg' ) }}" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>$ 356</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>NOKIA-8</td>
                                        <td>
                                            <ul class="list-unstyled team-info margin-0">                                                
                                                <li><img src="{{ asset('/public/images/xs/avatar3.jpg' ) }}" title="Avatar" alt="Avatar"></li>
                                                <li><img src="{{ asset('/public/images/xs/avatar2.jpg' ) }}" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>$ 542</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Rates</h2>
                        </div>
                        <div class="body">

                            <h6>Average Profile</h6>
                            <div id="progress-format1" class="progress">
                                <div class="progress-bar progress-bar-success" data-transitiongoal="27" aria-valuenow="27" style="width: 27%;">27%</div>
                            </div>
                            <h6>Affiliate Rate</h6>
                            <div id="progress-format2" class="progress">
                                <div class="progress-bar progress-bar-warning" data-transitiongoal="41" aria-valuenow="41" style="width: 41%;">41%</div>
                            </div>
                            <h6>Average Order Percentage</h6>
                            <div id="progress-custom-format" class="progress">
                                <div class="progress-bar" data-transitiongoal="77" aria-valuenow="77" style="width: 77%;">77%</div>
                            </div>
                           
                        </div>
                    <div>
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