<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MIBS || Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('/img/favicon.ico')}}">
		
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
        
        <!-- Nivo slider CSS
		============================================ -->
		<link rel="stylesheet" type="text/css" href="{{asset('/lib/custom-slider/css/nivo-slider.css')}}" media="screen" />	
		<link rel="stylesheet" type="text/css" href="{{asset('/lib/custom-slider/css/preview.css')}}" media="screen" />
		
		<!-- Fontawsome CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
          
        <!-- material iconic CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('/css/material-design-iconic-font.css')}}">
        <link rel="stylesheet" href="{{asset('/css/material-design-iconic-font.min.css')}}">
                        
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('/css/owl.carousel.css')}}">
        
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('/css/jquery-ui.css')}}">
        
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('/css/meanmenu.min.css')}}">
        
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
          
        <!-- Animate headline CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('/css/animate-heading.css')}}">
        <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
        
		<!-- Video CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('/css/jquery.mb.YTPlayer.css')}}">
        
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('/style.css')}}">
        
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('/css/responsive.css')}}">
        
		<!-- modernizr JS
		============================================ -->		
        <script src="{{asset('/js/vendor/modernizr-2.8.3.min.js')}}"></script>   
    </head>
    <body>
        <!-- Pre Loader
        ============================================ -->
        <div class="preloader">
            <div class="loading-center">
                <div class="loading-center-absolute">
                    <div class="object object_one"></div>
                    <div class="object object_two"></div>
                    <div class="object object_three"></div>
                </div>
            </div>
        </div>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="assets/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="as-mainwrapper">
            <div class="bg-white">
                <!-- header start -->
                <header class="header-area">
                    <div class="header-top-area ptb-10 hidden-sm hidden-xs">
                        <div class="container">
                            <div class="row">
                               <div class="col-md-6">
                                    <div class="account-usd text-left">
                                        <ul>
                                            <li class=" hidden-xs"><a href="/">Home</a></li>
                                            <li class=" hidden-xs"><a href="/register">Register</a></li>
                                            <li><a href="#">My Account <i class="fa fa-angle-down"></i></a>
                                                <ul class="submenu-mainmenu">
                                                    <li><a href="/login"><i class="fa fa-circle"></i>Login</a></li>
                                                    <li><a href="/profile-pembeli"><i class="fa fa-circle"></i>My Account</a></li>
                                                    <li><a href="cart"><i class="fa fa-circle"></i>My Cart</a></li>
                                                    <li><a href="checkout"><i class="fa fa-circle"></i>Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Kategori<i class="fa fa-angle-down"></i></a>
                                                <ul class="submenu-mainmenu">
                                                    <li><a href="/"><i class="fa fa-circle"></i>Motivasi</a></li>
                                                    <li><a href="/"><i class="fa fa-circle"></i>Fiqih</a></li>
                                                    <li><a href="/"><i class="fa fa-circle"></i>Sirah</a></li>
                                                    <li><a href="/"><i class="fa fa-circle"></i>Novel Fiksi</a></li>
                                                    <li><a href="/"><i class="fa fa-circle"></i>Pendidikan</a></li>
                                                    <li><a href="/"><i class="fa fa-circle"></i>Lain-lain</a></li>
                                                </ul>
                                            </li>
                                            <li class=" hidden-xs"><a href="/">Contact</a></li>
                                        </ul>
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="top-right">
                                        <div class="top-login-cart">
                                            <ul>
                                                <li><a href="cart"><img src="img/icon/cart_red.png" alt="cart">Cart (3)</a>
                                                    <ul class="submenu-mainmenu">
                                                        <!-- foreach buat cart -->
                                                        <li class="single-cart-item clearfix">
                                                            <span class="cart-img">
                                                                <a href="#"><img src="img/cart/1.jpg" alt=""></a>
                                                            </span>
                                                            <span class="cart-info">
                                                                <a href="#">Eletria ostma</a>
                                                                <span>$150 x 2</span>
                                                            </span>
                                                            <span class="trash-cart">
                                                                <a href="#"><i class="fa fa-trash-o"></i></a>
                                                            </span>    
                                                        </li>
                                                        <li>
                                                            <span class="sub-total-cart text-center">
                                                                Sub Total <span>$620</span>
                                                                <a href="cart" class="view-cart active">View Cart</a>
                                                                <a href="checkout" class="view-cart">Checkout</a>
                                                            </span>
                                                        </li>    
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                   </div>    
                               </div>
                            </div>
                        </div>   
                    </div>
                    
                    <div class="mainmenu-area text-center hidden-sm hidden-xs">
                                         
                    </div>    
                    <!-- Mobile Menu Area start -->
                    <div class="mobile-menu-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mobile-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a href="/">Home</a>
                                                </li>
                                                <li class="shop"><a href="shop-grid-right-sidebar.html">Kategori</a>
                                                    <ul class="submenu-mainmenu">
                                                        <li><a href="/"><i class="fa fa-circle"></i>Motivasi</a></li>
                                                        <li><a href="/"><i class="fa fa-circle"></i>Fiqih</a></li>
                                                        <li><a href="/"><i class="fa fa-circle"></i>Sirah</a></li>
                                                        <li><a href="/"><i class="fa fa-circle"></i>Novel Fiksi</a></li>
                                                        <li><a href="/"><i class="fa fa-circle"></i>Pendidikan</a></li>
                                                        <li><a href="/"><i class="fa fa-circle"></i>Lain-lain</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>					
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area end -->		   
                </header>
                <!-- header end -->
                 <!-- slider start -->
                <div class="slider-wrap">
                    <div class="preview-2">
                        <div id="nivoslider" class="slides"> 
                             <img src="img/slider/header.png" alt="" title="#slider-direction-1"  />
                             <img src="img/slider/hastag.png" alt="" title="#slider-direction-2"  />
                        </div>
                        
                    </div>
                </div>
                
                <!-- daftar buku start-->
                <div class="arrival-area clearfix pt-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="section-tab">
                                    <div class="section-tab-menu text-center mb-45">
                                        <ul role="tablist">
                                            <li role="presentation" class="active text-uppercase"><a aria-controls="" role="tab" data-toggle="tab">Collections</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                    <table>
                                        <tr>
                                            <div class="col-xs-3 col-width">  
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="#">
                                                                    <img class="primary-image" src="img/product/1.jpg" width="100%" alt="product">
                                                                </a>
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                                        <ul>
                                                                            <li><a class="modal-view" href="/detail"><i class="fa fa-eye"> Detail</i></a></li>
                                                                        </ul>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                <div class="pro-rating">  
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>  
                                                                </div> 
                                                                <div class="pro-price">
                                                                    <span class="new-price">Rp 45.000</span>
                                                                    <span class="old-price">Rp 50.000</span>
                                                                </div> 
                                                                <h3><a href="#">Tuntunan Sholat</a></h3>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </tr>
                                        <tr>
                                            <div class="col-xs-3 col-width">  
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="#">
                                                                    <img class="primary-image" src="img/product/1.jpg" width="100%" alt="product">
                                                                </a>
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                                        <ul>
                                                                            <li><a class="modal-view" href="/detail"><i class="fa fa-eye"> Detail</i></a></li>
                                                                        </ul>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                <div class="pro-rating">  
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>  
                                                                </div> 
                                                                <div class="pro-price">
                                                                    <span class="new-price">Rp 45.000</span>
                                                                    <span class="old-price">Rp 50.000</span>
                                                                </div> 
                                                                <h3><a href="#">Tuntunan Sholat</a></h3>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </tr>
                                        <tr>
                                            <div class="col-xs-3 col-width">  
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="#">
                                                                    <img class="primary-image" src="img/product/1.jpg" width="100%" alt="product">
                                                                </a>
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                                        <ul>
                                                                            <li><a class="modal-view" href="/detail"><i class="fa fa-eye"> Detail</i></a></li>
                                                                        </ul>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                <div class="pro-rating">  
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>  
                                                                </div> 
                                                                <div class="pro-price">
                                                                    <span class="new-price">Rp 45.000</span>
                                                                    <span class="old-price">Rp 50.000</span>
                                                                </div> 
                                                                <h3><a href="#">Tuntunan Sholat</a></h3>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </tr>
                                        <tr>
                                            <div class="col-xs-3 col-width">  
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="#">
                                                                    <img class="primary-image" src="img/product/1.jpg" width="100%" alt="product">
                                                                </a>
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                                        <ul>
                                                                            <li><a class="modal-view" href="/detail"><i class="fa fa-eye"> Detail</i></a></li>
                                                                        </ul>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                <div class="pro-rating">  
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>  
                                                                </div> 
                                                                <div class="pro-price">
                                                                    <span class="new-price">Rp 45.000</span>
                                                                    <span class="old-price">Rp 50.000</span>
                                                                </div> 
                                                                <h3><a href="#">Tuntunan Sholat</a></h3>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </tr>
                                        <tr>
                                            <div class="col-xs-3 col-width">  
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="#">
                                                                    <img class="primary-image" src="img/product/1.jpg" width="100%" alt="product">
                                                                </a>
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                                        <ul>
                                                                            <li><a class="modal-view" href="/detail"><i class="fa fa-eye"> Detail</i></a></li>
                                                                        </ul>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                <div class="pro-rating">  
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>  
                                                                </div> 
                                                                <div class="pro-price">
                                                                    <span class="new-price">Rp 45.000</span>
                                                                    <span class="old-price">Rp 50.000</span>
                                                                </div> 
                                                                <h3><a href="#">Tuntunan Sholat</a></h3>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </tr>
                                        <tr>
                                            <div class="col-xs-3 col-width">  
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="#">
                                                                    <img class="primary-image" src="img/product/1.jpg" width="100%" alt="product">
                                                                </a>
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                                        <ul>
                                                                            <li><a class="modal-view" href="/detail"><i class="fa fa-eye"> Detail</i></a></li>
                                                                        </ul>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                <div class="pro-rating">  
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>  
                                                                </div> 
                                                                <div class="pro-price">
                                                                    <span class="new-price">Rp 45.000</span>
                                                                    <span class="old-price">Rp 50.000</span>
                                                                </div> 
                                                                <h3><a href="#">Tuntunan Sholat</a></h3>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </tr>
                                        <tr>
                                            <div class="col-xs-3 col-width">  
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="#">
                                                                    <img class="primary-image" src="img/product/1.jpg" width="100%" alt="product">
                                                                </a>
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                                        <ul>
                                                                            <li><a class="modal-view" href="/detail"><i class="fa fa-eye"> Detail</i></a></li>
                                                                        </ul>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                <div class="pro-rating">  
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>  
                                                                </div> 
                                                                <div class="pro-price">
                                                                    <span class="new-price">Rp 45.000</span>
                                                                    <span class="old-price">Rp 50.000</span>
                                                                </div> 
                                                                <h3><a href="#">Tuntunan Sholat</a></h3>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </tr>
                                        <tr>
                                            <div class="col-xs-3 col-width">  
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="#">
                                                                    <img class="primary-image" src="img/product/1.jpg" width="100%" alt="product">
                                                                </a>
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                                        <ul>
                                                                            <li><a class="modal-view" href="/detail"><i class="fa fa-eye"> Detail</i></a></li>
                                                                        </ul>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                <div class="pro-rating">  
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>  
                                                                </div> 
                                                                <div class="pro-price">
                                                                    <span class="new-price">Rp 45.000</span>
                                                                    <span class="old-price">Rp 50.000</span>
                                                                </div> 
                                                                <h3><a href="#">Tuntunan Sholat</a></h3>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </tr>
                                    </table>
                                    <!-- <div class="tab-content row">
                                                <div class="col-xs-3 col-width">  
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="#">
                                                                    <img class="primary-image" src="img/product/1.jpg" width="100%" alt="product">
                                                                </a>
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                                        <ul>
                                                                            <li><a class="modal-view" href="/detail"><i class="fa fa-eye"> Detail</i></a></li>
                                                                        </ul>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                <div class="pro-rating">  
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>  
                                                                </div> 
                                                                <div class="pro-price">
                                                                    <span class="new-price">Rp 45.000</span>
                                                                    <span class="old-price">Rp 50.000</span>
                                                                </div> 
                                                                <h3><a href="#">Tuntunan Sholat</a></h3>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>    
                                    </div>     
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
                <!-- daftar buku start-->
                
                <!-- client area end -->
                <!-- service area end -->
                <div class="service-area mb-10 clearfix pt-30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="section-tab-menu text-center mb-45">
                                <ul role="tablist">
                                    <li role="presentation" class="active text-uppercase"><a aria-controls="" role="tab" data-toggle="tab">Our Values</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 ">
                                <div class="single-service text-center">
                                    <div class="single-service-content ptb-40">
                                        <div class="single-service-icon-wrapper">
                                            <div class="single-service-icon">
                                                <img src="img/icon/5.png" alt="">
                                            </div>
                                        </div>    
                                        <div class="single-service-info">
                                            <h4 class="text-uppercase">Shipping</h4>
                                            <p>Ongkir hanya Rp12.000 ke seluruh Jawa Timur</p>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-3 ">   
                                <div class="single-service text-center">
                                    <div class="single-service-content ptb-40">
                                        <div class="single-service-icon-wrapper">
                                            <div class="single-service-icon">
                                                <img src="img/icon/7.png" alt="">
                                            </div>
                                        </div>    
                                        <div class="single-service-info">
                                            <h4 class="text-uppercase">Cash On Delivery</h4>
                                            <p>Bisa COD di sekitar ITS</p>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-md-3">    
                                <div class="single-service text-center">
                                    <div class="single-service-content ptb-40">
                                        <div class="single-service-icon-wrapper">
                                            <div class="single-service-icon">
                                                <img src="img/icon/9.png" alt="">
                                            </div>
                                        </div>    
                                        <div class="single-service-info">
                                            <h4 class="text-uppercase">Sedekah</h4>
                                            <p>Membeli buku sama dengan bersedekah</p>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-md-3 ">    
                                <div class="single-service text-center">
                                    <div class="single-service-content ptb-40">
                                        <div class="single-service-icon-wrapper">
                                            <div class="single-service-icon">
                                                <img src="img/icon/10.png" alt="">
                                            </div>
                                        </div>    
                                        <div class="single-service-info">
                                            <h4 class="text-uppercase">Hadiah</h4>
                                            <p>Dapatkan hadiah pada event-event tertentu</p>
                                        </div>
                                    </div>    
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
                <!-- service area end -->
                <!-- touch area end -->
                <!-- <div class="touch-area ptb-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="touch-left">
                                    <div class="touch-logo mb-35">
                                        <a href="index"><img src="img/logo/2.png" alt="shofixe"></a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adi elit, sed do eiusmod tempor incididunt ut ore  dolore magna aliqua. Ut enim ad minim eniam</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adi elit, sed do eiusmod tempor incididunt ut</p>
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <div class="touch-right">
                                    <h2 class="text-uppercase">get in touch</h2>
                                    <form id="contact-form-two" action="mail.php" method="post">
                                        <input type="text" placeholder="Your name here..." name="name">
                                        <input type="text" placeholder="Your email here..." name="email">
                                        <textarea class="mtb-25" cols="30" rows="10" placeholder="Write message here..." name="message"></textarea>
                                        <button class="section-button" type="submit">send</button>
                                    </form>
                                    <p class="form-message"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   -->  
                <!-- touch area end -->
                <!-- footer start -->
                <footer class="footer-area clearfix pt-30">
                    <div class="footer-middle-area ptb-60">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="footer-widget">
                                        <h5>Contact</h5>
                                        <div class="single-footer-contact">
                                            <div class="footer-icon">
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                            <div class="footer-contact-info">
                                                <p>Masjid Manarul Ilmi </p>
                                                <p>Institut Teknologi Sepuluh Nopember</p>
                                                <p>Sukolilo, Surabaya, 60111</p>
                                            </div>
                                        </div>
                                        <div class="single-footer-contact">
                                            <div class="footer-icon">
                                                <i class="fa fa-instagram"></i>
                                            </div>
                                            <div class="footer-contact-info">
                                                <p><a href="http://instagram.com/mibs.bpu">@mibs.bpu</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-3 col-xs-12">
                                    <div class="footer-widget">
                                        <h5>About Manarul Ilmi Book Store</h5>
                                        <p style="color: white">Manarul Ilmi Book Store adalah sebuah usaha untuk jual-beli buku oleh Biro Dana Usaha BPU JMMI ITS. Maka dibuatlah web ini untuk penjualan buku-buku di MIBS secara online</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom-area ptb-25">
                        <div class="container">
                            <div class="row">
                                <div class="copyright text-center">
                                    <p>Copyright @ 2016 <span><a href="http://bootexperts.com/">BootExperts</a></span>. All right reserved. </p>
                                </div>
                                <!-- <div class="col-md-4 hidden-sm">
                                    <div class="payment text-right">
                                        <img src="img/payment/mibs_logo.png" alt="">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- footer end -->
            </div>
        </div>    
        
        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->
        
       	
       	<!-- jquery
		============================================ -->		
        <script src="{{asset('/js/vendor/jquery-1.12.4.min.js')}}"></script>
		<!-- bootstrap JS
		============================================ -->		
        <script src="{{asset('/js/bootstrap.min.js')}}"></script>		
		<!-- meanmenu JS
		============================================ -->		
        <script src="{{asset('/js/jquery.meanmenu.js')}}"></script>
		<!-- wow JS
		============================================ -->		
        <script src="{{asset('/js/wow.min.js')}}"></script>
		<!-- owl.carousel JS
		============================================ -->		
        <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
		<!-- counterdown JS
		============================================ -->		
        <script src="{{asset('/js/jquery.countdown.min.js')}}"></script>
        <!-- Video Player JS
		============================================ -->		
        <script src="{{asset('/js/jquery.mb.YTPlayer.js')}}"></script>
        <!-- AJax Chimp JS
        ============================================ -->		
        <script src="{{asset('/js/jquery.ajaxchimp.min.js')}}"></script> 
		<!-- price slider JS
		============================================ -->		
        <script src="{{asset('/js/jquery-price-slider.js')}}"></script> 
		<!-- elevator JS
		============================================ -->		
        <script src="{{asset('/js/jquery.elevateZoom-3.0.8.min.js')}}"></script> 
		<!-- scrollUp JS
		============================================ -->		
        <script src="{{asset('/js/jquery.scrollUp.min.js')}}"></script>
		<!-- plugins JS
		============================================ -->		
        <script src="{{asset('/js/plugins.js')}}"></script>
   		<!-- Nevo Slider js
		============================================ -->         
		<script type="text/javascript" src="{{asset('/lib/custom-slider/js/jquery.nivo.slider.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/custom-slider/home.js')}}"></script>          		 
		<!-- textillate js
		============================================ -->         
        <script src="{{asset('/js/jquery.textillate.js')}}"></script>      		 
        <script src="{{asset('/js/jquery.lettering.js')}}"></script>  
        <!-- animated headline js
		============================================ -->         
        <script src="{{asset('/js/animate-heading.js')}}"></script>  
        <!-- ajax js
		============================================ -->         
        <script src="{{asset('/js/ajax-mail.js')}}"></script>     		 
		<!-- main JS
		============================================ -->	
        <script src="{{asset('/js/main.js')}}"></script>
    </body>
</html>
