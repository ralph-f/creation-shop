<div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="{{ asset('/public/images/user.png') }}" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Alizee Thomas</strong></a>
                    
                </div>
                <hr>
                <ul class="row list-unstyled">
                    <li class="col-4">
                        <small>Sales</small>
                        <h6>456</h6>
                    </li>
                    <li class="col-4">
                        <small>Order</small>
                        <h6>1350</h6>
                    </li>
                    <li class="col-4">
                        <small>Revenue</small>
                        <h6>$2.13B</h6>
                    </li>
                </ul>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a data-url="{{ url('/sellers/dashboard') }}" class="nav-link menu-tab seller-tab {{ ($view_type == 'sellers') ? 'active' : '' }}"  data-toggle="tab" href="#seller">Seller</a></li>
                <li class="nav-item"><a data-url="{{ url('/merchants/dashboard') }}" class="nav-link menu-tab merchant-tab {{ ($view_type == 'merchants') ? 'active' : '' }}"  data-toggle="tab" href="#merchant">Merchant</a></li>

                <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li> -->
                <li class="nav-item"><a class="nav-link menu-tab" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>                
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane {{ ($view_type == 'sellers') ? 'active' : ''  }}" id="seller">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul class="metismenu main-menu">                            
                            <li class="{{ ($view_type == 'sellers' AND $page == 'dashboard') ? 'active' : ''  }}">
                                <a href="{{ url('/sellers/dashboard') }}"><i class="icon-home"></i> <span>Dashboard</span></a>
                            </li>
                            <li class="{{ ($view_type == 'sellers' AND $page == 'analytics') ? 'active' : ''  }}">
                                <a href="{{ url('/sellers/analytics') }}"><i class="icon-bar-chart"></i> <span>Analytics</span></a>
                            </li>
                            <li class="{{ ($view_type == 'sellers' AND ( $page == 'profile' OR $page == 'security' OR $page == 'password' ) ) ? 'active' : ''  }}">
                                <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="icon-user"></i> <span>My Account</span></a>
                                <ul aria-expanded="false" class="collapse" style="">
                                    <li class="{{ ($view_type == 'sellers' AND $page == 'profile' ) ? 'active' : ''  }}"><a href="{{ url('/sellers/profile') }}">Profile</a></li>
                                    <li class="{{ ($view_type == 'sellers' AND $page == 'security' ) ? 'active' : ''  }}"><a href="{{ url('/sellers/security') }}">Security</a></li>
                                    <li class="{{ ($view_type == 'sellers' AND $page == 'password' ) ? 'active' : ''  }}"><a href="{{ url('/sellers/password') }}">Change Password</a></li>
                                </ul>
                            </li>
                            <li class="{{ ($view_type == 'sellers' AND ( $page == 'add-new-product' OR $page == 'view-all-products' OR $page == 'manage-product-groups' OR $page == 'product-embed-generator' ) ) ? 'active' : ''  }}">
                                <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="fa fa-cube"></i> <span>Products</span></a>
                                <ul aria-expanded="false" class="collapse" style="">
                                    <li class="{{ ($view_type == 'sellers' AND $page == 'add-new-product' ) ? 'active' : ''  }}"><a href="{{ url('/sellers/add-new-product') }}">Add New Product</a></li>
                                    <li class="{{ ($view_type == 'sellers' AND $page == 'view-all-products' ) ? 'active' : ''  }}"><a href="{{ url('/sellers/view-all-products') }}">View All Products</a></li>
                                    <li class="{{ ($view_type == 'sellers' AND $page == 'manage-product-groups' ) ? 'active' : ''  }}"><a href="{{ url('/sellers/manage-product-groups') }}">Manage Product Groups</a></li>
                                    <li class="{{ ($view_type == 'sellers' AND $page == 'product-embed-generator' ) ? 'active' : ''  }}"><a href="{{ url('/sellers/product-embed-generator') }}">Product Embed Generator</a></li>
                                </ul>
                            </li>
                            <li class="{{ ($view_type == 'sellers' AND $page == 'orders') ? 'active' : ''  }}">
                                <a href="{{ url('/sellers/orders') }}"><i class="fa fa-shopping-cart"></i> <span>Orders</span></a>
                            </li>
                            <li class="{{ ($view_type == 'sellers' AND ( $page == 'add-new-coupon' OR $page == 'view-all-coupons' ) ) ? 'active' : ''  }}">
                                <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="icon-tag"></i> <span>Coupons</span></a>
                                <ul aria-expanded="false" class="collapse" style="">
                                    <li class="{{ ($view_type == 'sellers' AND $page == 'add-new-coupon' ) ? 'active' : ''  }}"><a href="{{ url('/sellers/add-new-coupon') }}">Add New Coupon</a></li>
                                    <li class="{{ ($view_type == 'sellers' AND $page == 'view-all-coupons' ) ? 'active' : ''  }}"><a href="{{ url('/sellers/view-all-coupons') }}">View All Coupons</a></li>
                                 
                                </ul>
                            </li>
                            <li class="{{ ($view_type == 'sellers' AND $page == 'feedback') ? 'active' : ''  }}">
                                <a href="{{ url('/sellers/feedback') }}"><i class="icon-speech"></i> <span>Feedback</span></a>
                            </li>
                            <li class="{{ ($view_type == 'sellers' AND ( $page == 'new-email' OR $page == 'view-sent-emails' ) ) ? 'active' : ''  }}">
                                <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="fa fa-bullhorn"></i> <span>Marketing</span></a>
                                <ul aria-expanded="false" class="collapse" style="">
                                    <li class="{{ ($view_type == 'sellers' AND $page == 'new-email' ) ? 'active' : ''  }}"><a href="{{ url('/sellers/new-email') }}">New Email</a></li>
                                    <li class="{{ ($view_type == 'sellers' AND $page == 'view-sent-emails' ) ? 'active' : ''  }}"><a href="{{ url('/sellers/view-sent-emails') }}">View Sent Emails</a></li>
                                </ul>
                            </li>
                            <li class="{{ ($view_type == 'sellers' AND ( $page == 'affiliate-payouts' OR $page == 'view-all-affiliates' ) ) ? 'active' : ''  }}">
                                <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="fa fa-users"></i> <span>Affiliates</span></a>
                                <ul aria-expanded="false" class="collapse" style="">
                                    <li class="{{ ($view_type == 'sellers' AND $page == 'affiliate-payouts' ) ? 'active' : ''  }}"><a href="{{ url('/sellers/affiliate-payouts') }}">Affiliate Payouts</a></li>
                                    <li class="{{ ($view_type == 'sellers' AND $page == 'view-all-affiliates' ) ? 'active' : ''  }}"><a href="{{ url('/sellers/view-all-affiliates') }}">View All Affiliates</a></li>
                                </ul>
                            </li>
                            <li class="{{ ($view_type == 'sellers' AND $page == 'payment-settings') ? 'active' : ''  }}">
                                <a href="{{ url('/sellers/payment-settings') }}"><i class="fa fa-gear"></i> <span>Payment Settings</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}"><i class="icon-power"></i> <span>Logout</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane {{ ($view_type == 'merchants') ? 'active' : ''  }}" id="merchant">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul  class="metismenu main-menu">                            
                            <li class="{{ ($view_type == 'merchants' AND $page == 'dashboard') ? 'active' : ''  }}">
                                <a href="{{ url('/merchants/dashboard') }}"><i class="icon-home"></i> <span>Dashboard</span></a>
                            </li>
                            <li class="{{ ($view_type == 'merchants' AND ( $page == 'profile' OR $page == 'security' OR $page == 'password') ) ? 'active' : ''  }}">
                                <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="icon-user"></i> <span>My Account</span></a>
                                <ul aria-expanded="false" class="collapse" style="">
                                    <li class="{{ ($view_type == 'merchants' AND $page == 'profile') ? 'active' : ''  }}"><a href="{{ url('/merchants/profile') }}">Profile</a></li>
                                    <li class="{{ ($view_type == 'merchants' AND $page == 'security') ? 'active' : ''  }}"><a href="{{ url('/merchants/security') }}">Security</a></li>
                                    <li class="{{ ($view_type == 'merchants' AND $page == 'password') ? 'active' : ''  }}"><a href="{{ url('/merchants/password') }}">Change Password</a></li>
                                </ul>
                            </li>
                            <li class="{{ ($view_type == 'merchants' AND $page == 'payments') ? 'active' : ''  }}">
                                <a href="{{ url('/merchants/payments') }}"><i class="fa fa-money"></i> <span>Payments</span></a>
                            </li>
                            <li class="{{ ($view_type == 'merchants' AND ( $page == 'payment-buttons' OR $page == 'api') ) ? 'active' : ''  }}">
                                <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="fa fa-shopping-cart"></i> <span>Accept Payments</span></a>
                                <ul aria-expanded="false" class="collapse" style="">
                                    <li class="{{ ($view_type == 'merchants' AND $page == 'payment-buttons') ? 'active' : ''  }}"><a href="{{ url('/merchants/payment-buttons') }}">Payment Buttons</a></li>
                                    <li class="{{ ($view_type == 'merchants' AND $page == 'api') ? 'active' : ''  }}"><a href="{{ url('/merchants/api') }}">API</a></li>
                                 
                                </ul>
                            </li>

                            <li class="{{ ($view_type == 'merchants' AND ( $page == 'settings' OR $page == 'payment-settings') ) ? 'active' : ''  }}">
                                <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="fa fa-gear"></i> <span>Settings</span></a>
                                <ul aria-expanded="false" class="collapse" style="">
                                    <li class="{{ ($view_type == 'merchants' AND $page == 'settings') ? 'active' : ''  }}"><a href="{{ url('/merchants/settings') }}">Merchant Settings</a></li>
                                    <li class="{{ ($view_type == 'merchants' AND $page == 'payment-settings') ? 'active' : ''  }}"><a href="{{ url('/merchants/payment-settings') }}">Payment Settings</a></li>
                                    
                                </ul>
                            </li>
                        
                            <li>
                                <a href="{{ url('/') }}"><i class="icon-power"></i> <span>Logout</span></a>
                            </li>
                        </ul>
                    </nav>                   
                </div>               
            </div>          
        </div>
    </div>
