<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Login Akun</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/bootstrap2/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('/css2/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('/css2/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{asset('/css2/colors/default.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
        <!-- <div class="new-login-box col-md-4"> -->
            <section id="wrapper" class="new-login-register">
                <div class="lg-info-panel ">
                </div>
                <div class="new-login-box">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Login</h3> <small>Enter your details below</small>
                        <form class="form-horizontal new-lg-form" id="loginform" action="index.html">
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" required="" placeholder="Username"> 
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input class="form-control" type="password" required="" placeholder="Password"> 
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" type="password" required="" placeholder="Mobile Phone Number"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <textarea class="form-control" type="password" required="" placeholder="Mobile Phone Number"></textarea> 
                                </div>
                            </div> -->
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Login</button>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-12 text-center">
                                    <p>Don't have an account? <a href="/register" class="text-danger m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        <!-- </div> -->
    
    <!-- jQuery -->
    <script src="{{asset('/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('/bootstrap2/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('/js2/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('/js2/waves.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('/js2/custom.min.js')}}"></script>
    <!--Style Switcher -->
    <script src="{{asset('/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>