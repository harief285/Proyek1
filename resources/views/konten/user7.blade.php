<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.ico" type="image/ico" />

        <title>Admin Panel</title>

        <!-- Bootstrap -->
        <link href="{{ asset('/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
        <!-- iCheck -->
        <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
        
        <!-- bootstrap-progressbar -->
        <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
        <!-- JQVMap -->
        <link href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                <a href="index.html" class="site_title"><i class="fa fa-strightface"></i> <span>Straight Face</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">

                    @yield('konten')




                </div>
                <!-- /menu profile quick info -->

                <br />

    <!-- sidebar menu -->
    @include('konten.sidebar')

                <!-- /sidebar menu -->






                





            

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Settings">

                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>

                </a>

                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
            </div>

            <!-- top navigation -->
            @include('konten.header')
        
            <!-- /top navigation -->

            <!-- page content -->


            @include('konten.main7')


            

        
            <!-- top tiles -->

        
            <!-- /top tiles -->

            </div>
            
                


            


        

        


        

            <!-- /page content -->
    









            
                


            


        

        


        












            <!-- footer content -->
            <footer>
            <div class="pull-right" >
                Proyek 1 Kelompok 6 D4 RPL 2B <a href="https://colorlib.com"></a>
            </div>
            <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
        </div>

        <!-- jQuery -->
        <script src="../../../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="../../../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../../../vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="../../../vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- gauge.js -->
        <script src="../../../vendors/gauge.js/dist/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="../../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="../../../vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="../../../vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <script src="../../../vendors/Flot/jquery.flot.js"></script>
        <script src="../../../vendors/Flot/jquery.flot.pie.js"></script>
        <script src="../../../vendors/Flot/jquery.flot.time.js"></script>
        <script src="../../../vendors/Flot/jquery.flot.stack.js"></script>
        <!-- <script src="../../../vendors/Flot/jquery.flot.resize.js"></script> -->
        <!-- Flot plugins -->
        <script src="../../../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="../../../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="../../../vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="../../../vendors/DateJS/build/date.js"></script>
        <!-- JQVMap -->
        <script src="../../../vendors/jqvmap/dist/jquery.vmap.js"></script>
        <script src="../../../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="../../../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="../../../vendors/moment/min/moment.min.js"></script>
        <script src="../../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../../../build/js/custom.min.js"></script>


        
    </body>
</html>