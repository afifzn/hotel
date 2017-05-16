<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HMS | Hotel Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!--calendar css-->
        <link href="assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo_login.png" alt="logo" class="logo-lg" />
                            <img src="assets/images/logo_login.png" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <!-- Top nav left menu -->
                            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                                <li><a href="reservation.php"><mark>Front Office</mark></a></li>
								<li><a href="bo_ds.php">Back Office</a></li>
                                <li><a href="asset_ds.html">Asset Management</a></li>
                                <li><a href="hrms_ds.html">HR Management</a></li>
								<li><a href="house-control.php">House Control</a></li>
								<li><a href="acces_ds.html">Acces Control</a></li>
                            </ul>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
									<?php
									include"koneksi.php";
													date_default_timezone_set("Asia/Jakarta");
													$tgl=date("y-m-d");
				$sql_select="SELECT COUNT(*) FROM reservasi,kamar WHERE reservasi.tgl_keluar='$tgl' AND reservasi.id_kamar=kamar.id_kamar";
				$exe_select=mysqli_query($konek,$sql_select);
				$row=mysqli_fetch_row($exe_select);
			?>
                                        <i class="mdi mdi-bell"></i> <span class="label label-danger"><?php echo $row[0];?></span>
                                    </a>
									<ul class="dropdown-menu p-0 dropdown-menu-lg">
                                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                        <li class="list-group notification-list" style="height: 267px;">
                                           <div class="slimscroll">
                                               <!-- list item-->
											   <?php 
											   include"koneksi.php";
													date_default_timezone_set("Asia/Jakarta");
													$tgl=date("y-m-d");
													$c="SELECT * FROM reservasi,kamar WHERE reservasi.tgl_keluar='$tgl' AND reservasi.id_kamar=kamar.id_kamar";
													$x=mysqli_query($konek,$c);
													while($tim=mysqli_fetch_array($x)){
											   ?>
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">Last day for Room <?php echo $tim['nomor_kamar']?></h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>
													<?php } ?>
											   </div>
                                        </li>
                                        
                                    </ul>
                                </li>

                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profil.html"><i class="ti-settings m-r-10"></i> Settings</a></li>
                                        <li><a href="lock-screen.html"><i class="ti-lock m-r-10"></i> Lock screen</a></li>
                                        <li class="divider"></li>
                                        <li><a href="index.html"><i class="ti-power-off m-r-10"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <a href="#">Witri Irawan</a>
                                    <p class="text-muted m-0">Jabatan</p>
                                </div>
                            </div>
                            <!--- End User Detail box -->