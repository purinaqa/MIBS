<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('plugins/images/favicon.png')}}">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('css2/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css2/style.css')}}" rel="stylesheet">
    <link href="{{asset('css2/nuzulstyle.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{asset('css2/colors/default.css" id="theme')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="#">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Nahda</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <!-- <div class="u-img"><img src="plugins/images/users/varun.jpg" alt="user" /></div> -->
                                    <div class="u-text">
                                        <h4>Nahda F.Z.</h4>
                                        <p class="text-muted">nahda.cutez@gmail.com</p>
                                        <a href="/profile-pembeli" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                    </div>
                                </div>
                            </li>   
                            <li role="separator" class="divider"></li>
                            <li><a href="/login"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Dashboard</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li> <a href="/profile-pembeli" class="waves-effect"><i  class="mdi mdi-account-card-details fa-fw"></i> <span class="hide-menu">View Profile</span></a> </li>                   <li class="devider"></li>
                    <li class="devider"></li>
                    <li><a href="/login" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                </ul>
        </div>
      
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard Buyer</h4> </div>
                </div>
                <!-- CHANGE HERE -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="user-bg"> <img width="70%" alt="user" src="../plugins/images/large/img1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white">NahdaFA</h4>
                                        <h5 class="text-white">nahdafauziyah@gmail</h5> 
                                        <h5 class="text-white">Jalan Mulyosari satu no. 5, Mulyorejo, Surabaya, Jawa Timur</h5> 
                                        <h5 class="text-white">081211540871</h5>
                                        </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <ul class="nav nav-tabs tabs customtab">
                                <li class="active tab">
                                    <a href="#home" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-home"></i></span> <span class="hidden-xs">Transaction History</span> </a>
                                </li>
                                <li class="tab">
                                    <a href="#comment" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Message</span> </a>
                                </li>
                                <li class="tab">
                                    <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Account Setting</span> </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">  
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12">
                                            <div class="white-box">
                                                <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                                    <select class="form-control pull-right row b-none">
                                                        <option>March 2017</option>
                                                        <option>April 2017</option>
                                                        <option>May 2017</option>
                                                       <!--  <option>June 2017</option>
                                                        <option>July 2017</option> -->
                                                    </select>
                                                </div>
                                                <h3 class="box-title">HISTORY</h3>
                                                <div class="row sales-report">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <h2>March 2017</h2>
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6 ">
                                                        <h1 class="text-right text-info m-t-20"></h1> 
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Transaction ID</th>
                                                                <th>Status</th>
                                                                <th>Date</th>
                                                                <th>Book ID</th>
                                                                <th>Qty</th>
                                                                <th>Price</th>
                                                                <th>Delivery Fees</th>
                                                                <th>Total Payment</th>
                                                                <th>Receipt Payment</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td class="txt-oflo">A001</td>
                                                                <td><span class="label label-danger label-rouded">Order</span> </td>
                                                                <td class="txt-oflo">April 18, 2017</td>
                                                                <td><span class="txt-oflo">B001</span></td>
                                                                <td><span class="txt-oflo">1</span></td>
                                                                <td><span class="txt-oflo">Rp 70.000,-</span></td>
                                                                <td><span class="txt-oflo">Rp 5.000,-</span></td>
                                                                <td><span class="text-danger">Rp 75.000,-</span></td>
                                                                <td><div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Receipt</span>
                                                                                <input type="file" class="upload"> </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                               <tr>
                                                                <td>2</td>
                                                                <td class="txt-oflo">A001</td>
                                                                <td><span class="label label-warning label-rouded">Process</span> </td>
                                                                <td class="txt-oflo">April 18, 2017</td>
                                                                <td><span class="txt-oflo">B001</span></td>
                                                                <td><span class="txt-oflo">1</span></td>
                                                                <td><span class="txt-oflo">Rp 70.000,-</span></td>
                                                                <td><span class="txt-oflo">Rp 5.000,-</span></td>
                                                                <td><span class="text-warning">Rp 75.000,-</span></td>
                                                                <td><div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Receipt</span>
                                                                                <input type="file" class="upload"> </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                                <tr>
                                                                <td>3</td>
                                                                <td class="txt-oflo">A001</td>
                                                                <td><span class="label label-success label-rouded">Paid</span> </td>
                                                                <td class="txt-oflo">April 18, 2017</td>
                                                                <td><span class="ttxt-oflo">B001</span></td>
                                                                <td><span class="txt-oflo">1</span></td>
                                                                <td><span class="txt-oflo">Rp 70.000,-</span></td>
                                                                <td><span class="txt-oflo">Rp 5.000,-</span></td>
                                                                <td><span class="text-success">Rp 75.000,-</span></td>
                                                                <td><div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Receipt</span>
                                                                                <input type="file" class="upload"> </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                                 <tr>
                                                                <td>4</td>
                                                                <td class="txt-oflo">A001</td>
                                                                <td><span class="label label-success label-rouded">Paid</span> </td>
                                                                <td class="txt-oflo">April 18, 2017</td>
                                                                <td><span class="ttxt-oflo">B001</span></td>
                                                                <td><span class="txt-oflo">1</span></td>
                                                                <td><span class="txt-oflo">Rp 70.000,-</span></td>
                                                                <td><span class="txt-oflo">Rp 5.000,-</span></td>
                                                                <td><span class="text-success">Rp 75.000,-</span></td>
                                                                <td><div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Receipt</span>
                                                                                <input type="file" class="upload"> </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>5</td>
                                                                <td class="txt-oflo">A001</td>
                                                                <td><span class="label label-success label-rouded">Paid</span> </td>
                                                                <td class="txt-oflo">April 18, 2017</td>
                                                                <td><span class="ttxt-oflo">B001</span></td>
                                                                <td><span class="txt-oflo">1</span></td>
                                                                <td><span class="txt-oflo">Rp 70.000,-</span></td>
                                                                <td><span class="txt-oflo">Rp 5.000,-</span></td>
                                                                <td><span class="text-success">Rp 75.000,-</span></td>
                                                                <td><div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Receipt</span>
                                                                                <input type="file" class="upload"> </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                       </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="steamline">
                                        <div class="sl-item">
                                            <div class="sl-left"> <img src="../plugins/images/users/genu.jpg" alt="user" class="img-circle" /> </div>
                                            <div class="sl-right">
                                                <div class="m-l-40"><a href="#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                    <p>assign a new task <a href="#"> Design weblayout</a></p>
                                                    <div class="m-t-20 row"><img src="../plugins/images/img1.jpg" alt="user" class="col-md-3 col-xs-12" /> <img src="../plugins/images/img2.jpg" alt="user" class="col-md-3 col-xs-12" /> <img src="../plugins/images/img3.jpg" alt="user" class="col-md-3 col-xs-12" /></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sl-item">
                                            <div class="sl-left"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle" /> </div>
                                            <div class="sl-right">
                                                <div class="m-l-40"> <a href="#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                    <div class="m-t-20 row">
                                                        <div class="col-md-2 col-xs-12"><img src="../plugins/images/img1.jpg" alt="user" class="img-responsive" /></div>
                                                        <div class="col-md-9 col-xs-12">
                                                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa</p> <a href="#" class="btn btn-success"> Design weblayout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sl-item">
                                            <div class="sl-left"> <img src="../plugins/images/users/ritesh.jpg" alt="user" class="img-circle" /> </div>
                                            <div class="sl-right">
                                                <div class="m-l-40"><a href="#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                    <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sl-item">
                                            <div class="sl-left"> <img src="../plugins/images/users/govinda.jpg" alt="user" class="img-circle" /> </div>
                                            <div class="sl-right">
                                                <div class="m-l-40"><a href="#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                    <p>assign a new task <a href="#"> Design weblayout</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                               <div class="tab-pane" id="comment">   
                                    <div class="isipesan">
                                        <div class="message-left" style="display: block;">
                                            <p>Admin</p>
                                            <p>barangnya sudah sampai sis...</p>
                                            <span class="time-left">11:00</span>
                                        </div>
                                        <br>
                                        <div class="message-right" style="display: block;">
                                            <p>Nahda</p>
                                            <p>Iya minn. Barang sudah ditangan</p>
                                            <span class="time-right">11:01</span>
                                        </div>
                                        <br>
                                        <div class="message-left" style="display: block;">
                                            <p>Admin</p>
                                            <p>Okk, makasih sis</p>
                                            <span class="time-left">11:02</span>
                                        </div>
                                        <br>
                                        <div class="message-right" style="display: block;">
                                            <p>Nahda</p>
                                            <p>Sama-samaa</p>
                                            <span class="time-right">11:05</span>
                                        </div>
                                        <!-- <div id="isipesan">
                                            <div class="container">
                                              <p>Admin</p>
                                              <p>Min, kunci jadwalnya di Alpro?</p>
                                              <span class="time-left">11:00</span>
                                            </div>

                                            <div class="container-darker">
                                              <p>Nahda</p>
                                              <p>Iya minn</p>
                                              <span class="time-right">11:01</span>
                                            </div>

                                            <div class="container">
                                              <p>Admin</p>
                                              <p>Okk, makasih min</p>
                                              <span class="time-left">11:02</span>
                                            </div>

                                            <div class="container-darker">
                                              <p>Nahda</p>
                                              <p>Sama-samaa</p>
                                              <span class="time-right">11:05</span>
                                            </div>
                                        </div>  --> 
                                        <br>
                                    </div>  
                                    <div class="row">
                                            <span class="col-md-10">
                                              <input type="text" class="form-control" id="inputpesan" placeholder="tulis pesan.." onkeyup="getNewComment()">
                                            </span>
                                            <span class="col-md-2">
                                                <button class="btn btn-info" id="submit" onclick="postNewComment()">Kirim</button>
                                            </span>
                                    </div>                 
                                    
                                </div>
                                <div class="tab-pane" id="messages">
                                    <div class="steamline">
                                        <div class="row">
                                        <div class="col-md-4 col-xs-6 b-r"> <a href="#"><img class="primary-image" src="img/product/1.jpg" width="100%" alt="product"></a>
                                            <br>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                 <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                 <ul>
                                                    <li><a class="modal-view" href="/detail"><i class="fa fa-eye"> Detail</i></a></li>
                                                </ul>
                                                </div>
                                            </div>
                                            <br>
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
                                        <div class="col-md-4 col-xs-6 b-r"> <a href="#"><img class="primary-image" src="img/product/1.jpg" width="100%" alt="product"></a>
                                            <br>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                 <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                 <ul>
                                                    <li><a class="modal-view" href="/detail"><i class="fa fa-eye"> Detail</i></a></li>
                                                </ul>
                                                </div>
                                            </div>
                                            <br>
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
                                        <div class="col-md-4 col-xs-6 b-r"> <a href="#"><img class="primary-image" src="img/product/1.jpg" width="100%" alt="product"></a>
                                            <br>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                 <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                 <ul>
                                                    <li><a class="modal-view" href="/detail"><i class="fa fa-eye"> Detail</i></a></li>
                                                </ul>
                                                </div>
                                            </div>
                                            <br>
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
                                        <!-- <table>
                                            <tr>
                                                <th>
                                                    <div>
                                                        <a href="#"><img class="primary-image" src="img/product/1.jpg" width="100%" alt="product"></a></th>
                                                    </div>
                                                <th><a href="#"><img class="primary-image" src="img/product/1.jpg" width="100%" alt="product"></a></th>
                                                <th><a href="#"><img class="primary-image" src="img/product/1.jpg" width="100%" alt="product"></a></th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <div class="wish-icon-hover text-center clearfix">
                                                        <div class="hover-text">
                                                            <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                             <ul>
                                                                <li><a class="modal-view" href="/detail"><i class="fa fa-eye"> Detail</i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                        </table> -->
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal form-material">
                                    
                                     <div class="form-group">
                                            <label class="col-md-12">Username</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="NahdaFA" class="form-control form-control-line"> </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-12">Nama</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="Nahda Fauziyah A" class="form-control form-control-line"> </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-md-12">Alamat</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="Jalan Mulyosari satu no. 5, Mulyorejo, Surabaya, Jawa Timur" class="form-control form-control-line"> </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-md-12">No Hp</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="081211540871" class="form-control form-control-line"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Email</label>
                                            <div class="col-md-12">
                                                <input type="email" placeholder="nahdafa@gmail.com" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Password</label>
                                            <div class="col-md-12">
                                                <input type="password" value="password" class="form-control form-control-line"> </div>
                                        </div>
                                    
                               
                                        <div class="form-group">
                                            <label class="col-sm-12">Select Country</label>
                                            <div class="col-sm-12">
                                                <select class="form-control form-control-line">
                                                    <option>London</option>
                                                    <option>India</option>
                                                    <option>Usa</option>
                                                    <option>Canada</option>
                                                    <option>Thailand</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- STOP HERE -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Manarul Ilmi Book Store</footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>

    <script type="text/javascript">
            function getNewComment() {     
              newCaption = document.getElementById('inputpesan').value;
              console.log(newCaption);     
            }

            function postNewComment() {
              var commentList, count;
              commentList = document.getElementsByClassName('isipesan')[0].innerHTML;
              console.log(commentList);
              commentList = commentList.concat('<div><p>Admin</p><p>').concat(newCaption).concat('</p><span class="time-left">11:00</span></div>');
              document.getElementsByClassName('isipesan')[0].innerHTML = commentList;
              newCaption = '';
              document.getElementById('inputpesan').value = '';

              count = Number(document.getElementById('count-2').innerText);
              console.log(count);
              count = count + 1;        
              document.getElementById('count-2').innerHTML = '<i class="ion-chatbubble" id="comment-count"></i>' + count.toString();
            }
    </script>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('js2/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('js2/waves.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('js2/custom.min.js')}}"></script>
    <!--Style Switcher -->
    <script src="{{asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>
