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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Analytics</h2>
                        <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/sellers/dashboard') }}"><i class="fa fa-money"></i></a></li>                                 
                            <li class="breadcrumb-item active">Analytics</li>
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

                                        <div class="row align-items-middle">
                                            <div class="col-lg-3 col-md-3">
                                                <label for="">Select Products you wish to run analytics for</label>
                                                <select name="" class="form-control select2">
                                                    <option value="">PHP</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <div class="form-group">
                                                    <label for="">Start Date </label>
                                                    <input type="text" class="datepicker-here form-control" data-timepicker="true" data-time-format="hh:ii aa" name="" placeholder="Start date">
                                                </div>      
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <div class="form-group">
                                                    <label for="">End Date</label>
                                                    <input type="text" class="datepicker-here form-control" data-timepicker="true" data-time-format="hh:ii aa" name="" placeholder="End date">
                                                </div>    
                                                 
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                            
                                                
                                                <button class="btn btn-primary custom-button-alignment"> Generate Data</button>       
                                                   
                                            </div>
                                        </div>    

                                     

                                    </form>
                                    
                                </div>

                            </div>
                            
                        </div>
                           
    
                    </div>
                </div>
            </div>


            <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Views By Traffic Types <small>8% High then last month</small></h2>
                        </div>
                        <div class="body text-center">                            
                            <div class="sparkline-pie2">6,4,8</div>                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <small>Search Engine Views</small>
                                                <h5 class="m-b-0">32,211,536</h5>
                                            </td>
                                            <td>
                                                <div class="sparkline m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="4" data-bar-Spacing="7" data-bar-Color="#11a0f8">2,3,5,6,9,8,7,8,7,4,6,5</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Social Media Views</small>
                                                <h5 class="m-b-0">23,516</h5>
                                            </td>
                                            <td>
                                                <div class="sparkline m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="4" data-bar-Spacing="7" data-bar-Color="#11a0f8">8,5,3,2,2,3,5,6,4,5,7,5</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Views From Affiliate Program</small>
                                                <h5 class="m-b-0">4,536</h5>
                                            </td>
                                            <td>
                                                <div class="sparkline m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="4" data-bar-Spacing="7" data-bar-Color="#11a0f8">6,5,4,6,5,5,2,3,1,8,4,2</div>
                                            </td>
                                        </tr>                                 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">

                    <div class="card">
                        <div class="header">
                            <h2>Monthly Sales</h2>
                        </div>
                        <div class="body">
                            <div id="bar-chart" class="ct-chart"></div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="header">
                            <h2>Top Country Regions</h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div id="donut_chart" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="220px" class="ct-chart-donut" style="width: 100%; height: 220px;"><g class="ct-series ct-series-a"><path d="M214.717,10.139A105,105,0,0,0,142.164,110L167.164,110A80,80,0,0,1,222.443,33.915Z" class="ct-slice-donut-solid" ct:value="20"></path></g><g class="ct-series ct-series-b"><path d="M279.611,10.139A105,105,0,0,0,214.369,10.253L222.177,34.002A80,80,0,0,1,271.885,33.915Z" class="ct-slice-donut-solid" ct:value="10"></path></g><g class="ct-series ct-series-c"><path d="M347.025,142.447A105,105,0,0,0,279.262,10.026L271.62,33.83A80,80,0,0,1,323.249,134.721Z" class="ct-slice-donut-solid" ct:value="25"></path></g><g class="ct-series ct-series-d"><path d="M147.303,142.447A105,105,0,0,0,347.138,142.098L323.334,134.456A80,80,0,0,1,171.08,134.721Z" class="ct-slice-donut-solid" ct:value="40"></path></g><g class="ct-series ct-series-e"><path d="M142.164,110A105,105,0,0,0,147.417,142.795L171.166,134.987A80,80,0,0,1,167.164,110Z" class="ct-slice-donut-solid" ct:value="5"></path></g><g><text dx="172.32999052031738" dy="55.62986416294625" text-anchor="middle" class="ct-label">20</text><text dx="247.16406249999997" dy="17.5" text-anchor="middle" class="ct-label">10</text><text dx="329.582165987424" dy="68.00587877409191" text-anchor="middle" class="ct-label">25</text><text dx="247.16406250000003" dy="202.5" text-anchor="middle" class="ct-label">40</text><text dx="155.8028909949498" dy="124.47018801622147" text-anchor="middle" class="ct-label">5</text></g></svg></div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">visitor from America</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">visitor from Canada</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">visitor from UK</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">visitor from India</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">visitor from Australia</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card overflowhidden  bg-info">
                        <div class="body">
                            <h6 class="text-light">Daily Sales</h6>
                        </div>
                        <div class="sparkline" data-type="bar" data-width="97%" data-height="102px" data-bar-Width="6" data-bar-Spacing="15"
                            data-bar-Color="#ffffff">7,5,6,4,8,7,5,6,2,3,5,11,2,3,4,1,4,7,2,3,6,4,5,5,6,2,3,5,6,2,3,4,2,4</div>
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