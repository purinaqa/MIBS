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
                
                <!--Start Product Details area  -->
                <div class="product-detail-area pt-50">
                    <div class="container">
                        <div class="row">
                            <div class="section-tab-menu text-center mb-45">
                                <ul role="tablist">
                                    <li role="presentation" class="active text-uppercase"><a aria-controls="" role="tab" data-toggle="tab">Details</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="zoomWrapper clearfix">
                                    <div id="img-1" class="zoomWrapper single-zoom pull-right">
                                        <a href="#">
                                            <img id="zoom1" src="img/shop/big1.jpg" data-zoom-image="img/shop/big1.jpg" alt="big-1">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="product-detail">
                                    <div class="product-title">
                                        <h2>((Judul Buku))</h2><br>
                                        <h4>Rp. HargaBuku(ad)<del>HargaBuku(bd)</del></h4>
                                    </div>   
                                    <h5>Available: <span> In Stock</span> </h5>

                                    <p class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidt utore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris    nisi ut aliquip ex ea commodo consequa uis aute irure dolor in reprehenderit. </p>
                                    <div class="size-quantity clearfix">
                                        <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <a href="/cart" class="single-add-to-cart-button pt-10" type="submit" style="padding-top:12px;">Add to cart</a>
                                        </form>
                                    </div>    
                                    </div>    
                                    <div class="wish-icon-hover-list mt-30 mb-30 text-left">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" title="shopping cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="refresh"><i class="fa fa-refresh"></i></a></li>
                                        </ul>
                                    </div>     
                                    <div class="widget-color">
                                       <h4 class="follow">Share:</h4>
                                       <ul>
                                           <li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
                                           <li class="twitter"><a href=""><i class="fa fa-twitter"></i></a></li>
                                           <li class="google-plus"><a href=""><i class="fa fa-google-plus"></i></a></li>
                                           <li class="linkedin"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        </ul>   
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="product-description-tab pt-50">
                                    <div class="description-tab-menu section-tab-menu pb-30">
                                        <ul class="clearfix" role="tablist">
                                            <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">information</a></li>
                                            <li role="presentation"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Reviews</a></li>
                                      </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="description">
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla patur. Excepteur sint occaecat cupidatat non proident reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>

                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="specification">
                                            <div class="col-xs-12">
                                                <div class="col-xs-3"><p><b>Author</b></p></div>
                                                <div class="col-xs-9 text-left"><p>Udin Syamsudin</p></div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-xs-3"><p><b>Publisher</b></p></div>
                                                <div class="col-xs-9 text-left"><p>Pro Media</p></div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-xs-3"><p><b>Year</b></p></div>
                                                <div class="col-xs-9 text-left"><p>2017</p></div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="review">
                                            <div class="com-md-8">
                                                <h2>Review(s) about the book</h2>
                                                <div class="amount-table table-responsive pt-20">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td height="95px">
                                                                <div class="col-md-1 center">
                                                                    <img src="/img/user.png" style="width:50px;height:50px">
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <p><span style="color:#f47142">Nuzul Maemunah,</span> Senin, 21 Mei 2018 14:25 WIB</p>
                                                                    <p>"Bagus bukunya, ceritanya menarique"</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="95px">
                                                                <div class="col-md-1 center">
                                                                    <img src="/img/user.png" style="width:50px;height:50px">
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <p><span style="color:#f47142">Purincess,</span> Selasa, 22 Mei 2018 09:45 WIB</p>
                                                                    <p>"Masya Allah, luar biasa, sungguh menggugah hati baca buku ini"</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="95px">
                                                                <div class="col-md-1 center">
                                                                    <img src="/img/user.png" style="width:50px;height:50px">
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <p><span style="color:#f47142">Umi Rakhma,</span> Selasa, 22 Mei 2018 19:10 WIB</p>
                                                                    <p>"Menurut saya bukunya gak sebagus kata orang-orang ah, biasa aja"</p>
                                                                </div>
                                                            </td>
                                                        </tr>                                           
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="container col-md-8">
                                                <div class="row" style="margin-top:40px;">
                                                    <div class="well well-sm">
                                                        <div class="text-right">
                                                            <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Leave a Review</a>
                                                        </div>
                                                    
                                                        <div class="row" id="post-review-box" style="display:none; margin:5px;">
                                                            <form accept-charset="UTF-8">
                                                                <input id="ratings-hidden" name="rating" type="hidden">
                                                                <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
                                                                <div class="col-md-6 text-right pt-10">
                                                                    <div class="stars starrr" data-rating="0"></div>
                                                                 </div>
                                                                <div class="c0l-md-6 pt-10">
                                                                    <button class="btn btn-success btn-sm" type="submit">Give Feedback</button>
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
                    </div>
                </div>
                <!--End Product Details area  --> 
                
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
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="img/product/static2.jpg">
                                    </div>
                                </div><!-- .product-images -->

                                <div class="product-info">
                                    <h1>Diam quis cursus</h1>
                                    <div class="price-box">
                                        <p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
                                    </div>
                                    <a href="shop" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single-add-to-cart-button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum.
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div><!-- .modal-product -->
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
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
        <script src="{{asset('/js/buatan.js')}}"></script>
    </body>
</html>
