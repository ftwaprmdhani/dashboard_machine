<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		  <!-- Font Awesome -->
		  <link rel="stylesheet" href="{{ asset('assets-admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
		  <!-- Ionicons -->
		  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		  <!-- Tempusdominus Bootstrap 4 -->
		  <link rel="stylesheet" href="{{ asset('assets-admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
		  <!-- iCheck -->
		  <link rel="stylesheet" href="{{ asset('assets-admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
		  <!-- JQVMap -->
		  <link rel="stylesheet" href="{{ asset('assets-admin-lte/plugins/jqvmap/jqvmap.min.css') }}">
		  <!-- Theme style -->
		  <link rel="stylesheet" href="{{ asset('assets-admin-lte/dist/css/adminlte.min.css') }}">
    </head>
    <body class="hold-transition layout-top-nav">
		<div class="wrapper">

		  <!-- Navbar -->
		  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
			<div class="container">
			  <a href="../../index3.html" class="navbar-brand">
				<img src="{{ asset('assets-admin-lte/dist/img/tmmin-logo.jpg') }}" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light"></span>
			  </a>


			  <!-- Right navbar links -->
			  <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
				
				
			  </ul>
			</div>
		  </nav>
		  <!-- /.navbar -->

		  <!-- Content Wrapper. Contains page content -->
		  <div class="content-wrapper">
			<div class="container">
			
			<?php
				/*echo json_encode($all_data);
				$json = json_encode($all_data);
				
				// use json
				$get_data = json_decode($json, true);
				
				echo "<br><br>tampilkan data:<br>";
				foreach($get_data as $row) {
					echo $row['mesin_deskripsi'] ."<br>";
				}*/
			?>
			
			
			
			</div>
			<img src="{{ asset('assets-admin-lte/dist/img/bg-dashboard.png') }}" style="width: 100%; height: 500px; <?= $padding_machine1 ?>;">
			<!-- /.content -->
		  </div>
		  <!-- /.content-wrapper -->

		  
		  <!-- Main Footer -->
		  <footer class="main-footer">
			<!-- To the right -->
			<div class="float-right d-none d-sm-inline">
			  Dashboard Machine
			</div>
			<!-- Default to the left -->
			<strong>Copyright &copy; <?= date('Y') ?> <a href="#!">TMMIN</a>.</strong> All rights reserved.
		  </footer>
		</div>
		<!-- ./wrapper -->
		
		<!-- jQuery -->
		<script src="{{ asset('assets-admin-lte/plugins/jquery/jquery.min.js') }}"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="{{ asset('assets-admin-lte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		  $.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="{{ asset('assets-admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
