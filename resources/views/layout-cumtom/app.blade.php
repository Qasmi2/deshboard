<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'WIZKON DESHBOARD') }}</title>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('js/morris/morris-0.4.3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 
     
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> <strong>WIZKON</strong></a>
            </div>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		<!-- <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div> -->
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                   


                    <li>
                        <a href="#"> Multi-Level Dropdown</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
       
		 <!-- /. NAV SIDE  -->
         <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Forms Page <small>Best form elements.</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->




             
			<footer><p>Wizkon Deshboard</p></footer>
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <!-- <script src="assets/js/jquery-1.10.2.js"></script> -->
    <script src="{{ asset('js/jquery-1.10.2.js') }}" defer></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
	 
    <!-- Metis Menu Js -->
    <script src="{{ asset('js/jquery.metisMenu.js') }}" defer></script>
    <!-- <script src="assets/js/jquery.metisMenu.js"></script> -->
    <!-- Morris Chart Js -->
    <script src="{{ asset('js/morris/raphael-2.1.0.min.js') }}" defer></script>
    <!-- <script src="assets/js/morris/raphael-2.1.0.min.js"></script> -->
    <script src="{{ asset('js/morris/morris.js') }}" defer></script>
    <!-- <script src="assets/js/morris/morris.js"></script> -->
	
    <script src="{{ asset('js/easypiechart.js') }}" defer></script>
    <script src="{{ asset('js/easypiechart-data.js') }}" defer></script>
	<!-- <script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script> -->
    <script src="{{ asset('js/Lightweight-Chart/jquery.chart.js') }}" defer></script>
	 <!-- <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	 -->
    <!-- Custom Js -->
    <script src="{{ asset('js/custom-scripts.js') }}" defer></script>
    <!-- <script src="assets/js/custom-scripts.js"></script> -->
 

</body>

</html>