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
                    <a class="logo" href="index.html">
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
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Admin</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="plugins/images/users/varun.jpg" alt="user" /></div>
                                    <div class="u-text">
                                        <h4>Admin MIBS</h4>
                                        <p class="text-muted">mibs.bpu@gmail.com</p>
                                        <!-- <a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a> -->
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
                    <li> <a href="/admin-book" class="waves-effect"><i  class="mdi mdi-book-multiple fa-fw"></i> <span class="hide-menu">Kelola Buku</span></a> </li>
                    <li> <a href="/admin-pembelian" class="waves-effect"><i  class="mdi mdi-shopping fa-fw"></i> <span class="hide-menu">Kelola Pembelian</span></a> </li>
                    <li> <a href="/admin-penjualan" class="waves-effect"><i  class="mdi mdi-elevation-rise fa-fw"></i> <span class="hide-menu">Kelola Penjualan</span></a> </li>                    <li class="devider"></li>
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
                        <h4 class="page-title">Dashboard Admin</h4> </div>
                </div>
                <!-- CHANGE HERE -->
                <div class="row">
                    <div class="col-md-12 col-lg-8 col-sm-12" style="width: 100%;">
                        <div class="panel">
                            <!--  <div class="row">
                                <div class="col col-xs-3">
                                    <div class="panel-heading">DAFTAR BUKU</div>
                                </div>
                                <div class="col-xs-3" style="margin-left: 250px; margin-top: 10px;">
                                    <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                                </div>
                                 <div class="col-xs-3 " style="margin-left: 10px">
                                    <button onclick="document.getElementById('id01').style.display='block'" style="width: 120px; background-color: #4db8ff; margin-top: 20px; height: 40px; margin-left: 110px">Add Book</button>
                                </div>
                           </div> -->
                            <div class="row">
                                <div class="col col-xs-6">
                                    <div class="panel-heading">DAFTAR BUKU</div>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <div class="row">
                                        <div class="col col-xs-6">
                                            <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                                        </div>
                                        <div class="col col-xs-6">
                                            <button data-toggle="modal" data-target="#add-book" style="width: 120px; background-color: #4db8ff; margin-top: 20px; height: 30px; margin-right: 30px; padding-top: 5px">Add Book</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover manage-u-table">
                                    <thead>
                                        <tr>
                                            <th style="width: 70px;" class="text-center">#</th>
                                            <th>Book ID</th>
                                            <th>Book's Category</th>
                                            <th>Book's Title</th>
                                            <th>Author</th>
                                            <th>Publisher</th>
                                            <th>Stock</th>
                                            <th>Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td><span class="font-medium">B001</span>
                                                <br/><!-- <span class="text-muted">Texas, Unitedd states</span> --></td>
                                            <td>Buku
                                                <br/><!-- <span class="text-muted">Past : teacher</span> --></td>
                                            <td>Tuntunan Sholat Lengkap
                                                <br/><!-- <span class="text-muted">999 - 444 - 555</span> --></td>
                                            <td>Rezky Alamsyah
                                                <br/><!-- <span class="text-muted">Past : teacher</span> --></td>
                                            <td>Gramedia
                                                <br/><!-- <span class="text-muted">Past : teacher</span> --></td>
                                            <td>5
                                                <br/><!-- <span class="text-muted">999 - 444 - 555</span> --></td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button data-toggle="modal" data-target="#id02" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt" ></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">2</td>
                                            <td><span class="font-medium">B002</span>
                                                <br/><!-- <span class="text-muted">Texas, Unitedd states</span> --></td>
                                            <td>Buku
                                                <br/><!-- <span class="text-muted">Past : teacher</span> --></td>
                                            <td>Merajut Sayap Bidadari
                                                <br/><!-- <span class="text-muted">999 - 444 - 555</span> --></td>
                                            <td>Purina Qurota
                                                <br/><!-- <span class="text-muted">Past : teacher</span> --></td>
                                            <td>Sinar Dunia
                                                <br/><!-- <span class="text-muted">Past : teacher</span> --></td>
                                            <td>7
                                                <br/><!-- <span class="text-muted">999 - 444 - 555</span> --></td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button data-toggle="modal" data-target="#id02"  class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt" ></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">3</td>
                                            <td><span class="font-medium">B003</span>
                                                <br/><!-- <span class="text-muted">Texas, Unitedd states</span> --></td>
                                            <td>Majalah
                                                <br/><!-- <span class="text-muted">Past : teacher</span> --></td>
                                            <td>Taaruf halal
                                                <br/><!-- <span class="text-muted">999 - 444 - 555</span> --></td>
                                            <td>Nuzul Ristyantika
                                                <br/><!-- <span class="text-muted">Past : teacher</span> --></td>
                                            <td>Sinar Dunia
                                                <br/><!-- <span class="text-muted">Past : teacher</span> --></td>
                                            <td>3
                                                <br/><!-- <span class="text-muted">999 - 444 - 555</span> --></td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button data-toggle="modal" data-target="#id02"  class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt" ></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">4</td>
                                            <td><span class="font-medium">B004</span>
                                                <br/><!-- <span class="text-muted">Texas, Unitedd states</span> --></td>
                                            <td>Buku
                                                <br/><!-- <span class="text-muted">Past : teacher</span> --></td>
                                            <td>Dia
                                                <br/><!-- <span class="text-muted">999 - 444 - 555</span> --></td>
                                            <td>Syavira Tiara
                                                <br/><!-- <span class="text-muted">Past : teacher</span> --></td>
                                            <td>Gunung Agung
                                                <br/><!-- <span class="text-muted">Past : teacher</span> --></td>
                                            <td>2
                                                <br/><!-- <span class="text-muted">999 - 444 - 555</span> --></td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button data-toggle="modal" data-target="#id02"  class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt" ></i></button>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
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


    <!---->
    <div id="add-book" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="col-md-12 modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Add Book</h4> </div>
                
                    <div class="modal-body">
                        <from class="form-horizontal form-material">
                            <div class="form-group">
                                <label for="email"><b>Book's Category</b></label>
                                <input type="text" placeholder="Enter Book Category" name="email" required>
                                  
                                <label for="email"><b>Book's Title</b></label>
                                <input type="text" placeholder="Enter Book Name" name="email" required>

                                <label for="email"><b>Publication Year</b></label>
                                <input type="text" placeholder="Enter Book Year" name="email" required>

                                <label for="email"><b>Author</b></label>
                                <input type="text" placeholder="Enter Author's Name" name="email" required>

                                <label for="email"><b>Publisher</b></label>
                                <input type="text" placeholder="Enter Publisher's Name" name="email" required>

                                <label for="email"><b>Stock</b></label>
                                <input type="text" placeholder="Enter Stock" name="email" required>
                                 <!--  <div class="col-md-12 m-b-20">
                                      <input type="text" class="form-control" placeholder="Rincian Tugas"> </div>
                                  <div class="col-md-12 m-b-20">
                                      <input type="text" class="form-control" placeholder="Deskripsi"> </div> -->
                            </div>
                        </from>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                
            </div>
            <!-- /.modal-content -->
        </div>
      <!-- /.modal-dialog -->
    </div>
     <div id="id02" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="col-md-12 modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Add Book</h4> </div>
                
                    <div class="modal-body">
                        <from class="form-horizontal form-material">
                            <div class="form-group">
                                <label for="email"><b>Book's Category</b></label>
                                <input type="text" placeholder="Muslimah" name="email" required>
                                  
                                <label for="email"><b>Book's Title</b></label>
                                <input type="text" placeholder="Merajut Sayap Bidadari" name="email" required>

                                <label for="email"><b>Publication Year</b></label>
                                <input type="text" placeholder="2015" name="email" required>

                                <label for="email"><b>Author</b></label>
                                <input type="text" placeholder="Purina Qurota" name="email" required>

                                <label for="email"><b>Publisher</b></label>
                                <input type="text" placeholder="Sinar Dunia" name="email" required>

                                <label for="email"><b>Stock</b></label>
                                <input type="text" placeholder="5" name="email" required>
                                 <!--  <div class="col-md-12 m-b-20">
                                      <input type="text" class="form-control" placeholder="Rincian Tugas"> </div>
                                  <div class="col-md-12 m-b-20">
                                      <input type="text" class="form-control" placeholder="Deskripsi"> </div> -->
                            </div>
                        </from>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                
            </div>
            <!-- /.modal-content -->
        </div>
      <!-- /.modal-dialog -->
    </div>

<script>
// Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

    <!---->

    <script>
    // Get the modal
        var modal = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>
