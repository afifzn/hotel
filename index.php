<?php
session_start();
if($_SESSION){
	header("Location: home.php");
}
?>


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

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="index.html" class="text-success">
                                            <span><img src="assets/images/logo_login.png" alt="" height="80"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
								<?php
  include "koneksi.php";
if(isset($_POST['login'])){
     $user=$_POST['username'];
     $pass=md5($_POST['password']);
     $res="select * from users where username='$user' and password='$pass'";
	 $exe=mysqli_query($konek,$res);
     $data=mysqli_fetch_array($exe);
	// $id_admin=$data['id_karyawan'];
     $nm=$data['nama_lengkap'];
     $name=$data['username'];
     $word=$data['password'];
	 $foto=$data['gambar'];
	 $jabatan=$data['level'];
	 $id=$data['id_user'];
     
     if($user==$name && $pass==$word){
          if($jabatan=='super'){
               //session_start();
			   $adm_id= $_SESSION['id_user']=$id;
			   //$id_adm = $_SESSION['id_karyawan']=$id_admin;
               $nama= $_SESSION['nama_lengkap']=$nm;
               $uname= $_SESSION['username']=$name;
			   $_SESSION['gambar']=$foto;
			   $jab= $_SESSION['level']=$jabatan;
				
               echo '<script>window.location.assign("fo_ds.php")</script>';
	 }else if($jabatan=='user'){
               //session_start();
			   $adm_id= $_SESSION['id_admin']=$id;
			   //$id_adm = $_SESSION['id_karyawan']=$id_admin;
               $nama= $_SESSION['nama_lengkap']=$nm;
               $uname= $_SESSION['uname']=$name;
			   $_SESSION['foto']=$foto;
			   $jab= $_SESSION['level']=$jabatan;
				
               
               echo '<script>window.location.assign("home.php")</script>';
	 }else if($jabatan=='Super Admin'){
               //session_start();
			   $adm_id= $_SESSION['id_admin']=$id;
			   //$id_adm = $_SESSION['id_karyawan']=$id_admin;
               $nama= $_SESSION['nama_lengkap']=$nm;
               $uname= $_SESSION['uname']=$name;
			   $_SESSION['foto']=$foto;
			   $jab= $_SESSION['level']=$jabatan;
				
               echo '<script>window.location.assign("home.php")</script>';
	 }
}
else{
	echo"<div class='alert alert-danger'>
                                        <a class='close' data-dismiss='alert' href='#'>&times;</a>
                                        Username dan Password salah !
                                    </div>";
}
}
			   ?>
								
								
                                <div class="account-content">
								
                                    <form class="form-horizontal" action="" method="post">

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="emailaddress">Username </label>
                                                <input class="form-control" name="username" type="text" id="emailaddress" placeholder="Username">
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" name="password" id="password" placeholder="Enter password">
                                            </div>
                                        </div>
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Login</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Copyright 2017 <a href="https://www.mahakaryateknologi.co.id/" class="text-dark m-l-5">Mahakarya Teknologi</a> | All right reserved </p>
                                </div>
                            </div>

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>