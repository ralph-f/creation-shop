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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Add New Product</h2>
                        <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/sellers/dashboard') }}"><i class="fa fa-money"></i></a></li>                                
                            <li class="breadcrumb-item active">Products</li>
                            <li class="breadcrumb-item active">Add New Product</li>
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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        
                        <div class="body">
                            <form id="wizard_with_validation" method="POST" class="">
                                <h3>General</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <label for="">Product Title  <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Product Title" name="product_title" required>
                                    </div>
                                    <div class="form-group form-float">
                                        <label for="">Product Description</label>
                                        <div class="summernote" required> </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <label for="">Product Image</label>
                                        <input type="file" class="dropify-event">
                                    </div>



                                </fieldset>
                                <h3>Settings</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <label for="">What Type of Product Do You Want to Sell? <span class="text-danger">*</span></label>
                                        <select name="" class="form-control product-type" required>
                                            <option value="file">Digital Product (E-Book, PDF, Audio, Video files etc)</option>
                                            <option value="code">Codes/Serials (Beta Access Key or License Key)</option>
                                            <option value="service">Service (A Standalone Product)</option>
                                        </select>
                                    </div>

                                    <div class="custom-field-wrapper  file-wrapper">
                                        <div class="form-group form-float">
                                            <label for="">Upload a PDF or other type of file</label>
                                            <input type="file" class="dropify-event">
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="fancy-radio">
                                                <label><input name="product_limit" class="limit-quota" value="unlimited" type="radio" checked><span><i></i>Allow this product to be purchased unlimited times</span></label>
                                            </div>
                                            <div class="fancy-radio">
                                                <label><input name="product_limit" class="limit-quota" value="limited" type="radio"><span><i></i>Limit number of sales for this product</span></label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float limit-wrapper">
                                            <label for="">Limit Sales</label>
                                            <input type="text" class="form-control" placeholder="Amount of time you'd like to sell this product">
                                        </div>
                                    </div>
                                    <div class="custom-field-wrapper custom-wrapper code-wrapper">
                                        <div class="form-group account-combo-input-field-wrapper form-float">
                                            <label for="">Accounts/Combos/Codes <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control codes-field" placeholder="Add code/serials and hit enter">
                                        </div>
                                        <div class="form-group added-codes-main-wrapper form-float">
                                            <label for="">Codes that will be added</label>
                                            <div class="added-codes-wrapper"></div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="fancy-checkbox">
                                                <label><input type="checkbox" name="allow_multiple_code" value="allow_multiple"><span>Allow multiple codes to be purchased at once</span></label>
                                            </div>
                                        </div>
                                        <div class="form-group account-combo-input-field-wrapper form-float">
                                            <label for="">Minimum Purchase Quantity</label>
                                            <input type="text" class="form-control" value="" placeholder="Minimum Purchase Quantity">
                                        </div>
                                    </div>

                                    <div class="custom-field-wrapper custom-wrapper service-wrapper">
                                        
                                        <div class="form-group form-float">
                                            <p class="alert custom-info-alert">You have selected a service product. Please ensure that the Product Delivery E-Mail Message (on step 4) contains instructions for the buyer</p>   
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="fancy-checkbox">
                                                <label><input type="checkbox" name="allow_multiple_code" value="allow_multiple"><span>Allow more than one to be purchased at once</span></label>
                                            </div>
                                        </div>
                                        <div class="form-group account-combo-input-field-wrapper form-float">
                                            <label for="">Minimum Purchase Quantity</label>
                                            <input type="text" class="form-control" value="" placeholder="Minimum Purchase Quantity">
                                        </div>
                                        <div class="form-group account-combo-input-field-wrapper form-float">
                                            <label for="">Maximum times you want to sell this product. Default: -1 (unlimited)</label>
                                            <input type="text" class="form-control" value="-1" placeholder="Maximum stock (-1 = unlimited)">
                                        </div>
                                       
                                    </div>
                                   
                                </fieldset>
                                <h3>Pricing</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <label for="">Product Price <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Product Price">
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <label for="">Payment Method <span class="text-danger">*</span></label>
                                        <select name="" class="form-control">
                                            <option value="paypal">Paypal</option>
                                        </select>
                                    </div>
                                    <div class="form-group form-float">
                                        <select name="" class="form-control">
                                            <option value="paypal">Allow all buyers to purchase</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <h3>Sharing & Finish</h3>
                                <fieldset>
                                    <h5>Product Delivery E-Mail</h5><br>
                                    <div class="form-group form-float">
                                       <label for="">Email Message <span class="text-danger">*</span></label>
                                       <p class="alert custom-info-alert">You can edit the e-mail message that will be send to your buyers here. <br>The following variables are allowed: {productTitle}, {productPrice}, {codePurchased}, {fileDownloadUrl}, {buyerName}, {buyerEmail}</p>   
                                       <textarea name="" id="" cols="30" class="form-control" rows="10">Hello {buyerName},Thank you for purchasing {productTitle}.Here is the license you purchased: {codePurchased}</textarea> 
                                    </div>

                                    <div class="form-group form-float">
                                        <label for="">Social Sharing Options <span class="text-danger">*</span></label>
                                        <div class="form-group form-float">
                                            <div class="fancy-checkbox">
                                                <label><input type="checkbox" name="" ><span>Show Facebook Share Button</span></label>
                                            </div>
                                            <div class="fancy-checkbox">
                                                <label><input type="checkbox" name="" ><span>Show Tweet Button</span></label>
                                            </div>
                                            <div class="fancy-checkbox">
                                                <label><input type="checkbox" name="" ><span>Show PinIt Button</span></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <label for="">Affiliate Options <span class="text-danger">*</span></label>
                                        <div class="form-group form-float">
                                            <p>Please visit <a href="#">this link</a> to learn more about how the affilicate program works.</p>   
                                            <div class="fancy-checkbox">
                                                <label><input type="checkbox" name="" ><span>Allow Affiliates to signup for this product </span></label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </fieldset>
                            </form>
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