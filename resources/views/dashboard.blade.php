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
			<div class="container-fluid">
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
				$json = json_encode($all_data);
				
				// use json
				$get_data = json_decode($json, true);
				
				foreach($get_data as $row) {
					$line = $row['mesin_line'];
					$desc = $row['mesin_deskripsi'];
					$bb = $row['mesin_batas_bawah'];
					$ba = $row['mesin_batas_atas'];
					$value = $row['mesin_value'];

					if($line == 1){
						echo '<a href="#" style="position: absolute; top: '.$top_line1.'; left: '.$left_line1.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line1 = $left_line1 + 17;
					} else if ($line==2){
						echo '<a href="#" style="position: absolute; top: '.$top_line2.'; left: '.$left_line2.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line2 = $left_line2 + 17;
					} else if ($line==3){
						echo '<a href="#" style="position: absolute; top: '.$top_line3.'; left: '.$left_line3.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line3 = $left_line3 + 17;
					} else if ($line==4){
						echo '<a href="#" style="position: absolute; top: '.$top_line4.'; left: '.$left_line4.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line4 = $left_line4 + 17;
					} else if ($line==5){
						echo '<a href="#" style="position: absolute; top: '.$top_line5.'; left: '.$left_line5.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line5 = $left_line5 + 17;
					} else if ($line==6){
						echo '<a href="#" style="position: absolute; top: '.$top_line6.'; left: '.$left_line6.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line6 = $left_line6 + 17;
					} else if ($line==7){
						echo '<a href="#" style="position: absolute; top: '.$top_line7.'; left: '.$left_line7.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line7 = $left_line7 + 17;
					} else if ($line==8){
						echo '<a href="#" style="position: absolute; top: '.$top_line8.'; left: '.$left_line8.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line8 = $left_line8 + 17;
					} else if ($line==9){
						echo '<a href="#" style="position: absolute; top: '.$top_line9.'; left: '.$left_line9.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line9 = $left_line9 + 17;
					} else if ($line==10){
						echo '<a href="#" style="position: absolute; top: '.$top_line10.'; left: '.$left_line10.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line10 = $left_line10 + 17;
					} else if ($line==11){
						echo '<a href="#" style="position: absolute; top: '.$top_line11.'; left: '.$left_line11.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line11 = $left_line11 + 17;
					} else if ($line==12){
						echo '<a href="#" style="position: absolute; top: '.$top_line12.'; left: '.$left_line12.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line12 = $left_line12 + 17;
					} else if ($line==13){
						echo '<a href="#" style="position: absolute; top: '.$top_line13.'; left: '.$left_line13.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line13 = $left_line13 + 17;
					} else if ($line==14){
						echo '<a href="#" style="position: absolute; top: '.$top_line14.'; left: '.$left_line14.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line14 = $left_line14 + 17;
					} else if ($line==15){
						echo '<a href="#" style="position: absolute; top: '.$top_line15.'; left: '.$left_line15.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line15 = $left_line15 + 16.6;
					} else if ($line==16){
						echo '<a href="#" style="position: absolute; top: '.$top_line16.'; left: '.$left_line16.'px;"  data-toggle="modal" data-target="#modal-machine" onclick="preview_machine(\''.$desc.'\')">';
						$left_line16 = $left_line16 + 16.6;
					} 

					
					if($bb < $value && $value < $ba){?>
						<img style="width: <?= $width_all_machine?>; height: <?= $height_all_machine?>;" src="{{ asset('assets-admin-lte/dist/img/bg-green.png') }}"></a>
					<?php } else {?>
						<img style="width: <?= $width_all_machine?>; height: <?= $height_all_machine?>;" src="{{ asset('assets-admin-lte/dist/img/bg-yellow.png') }}"></a>
					<?php }

					// modal(tampil data dari mesin yg di klik)

					// yang kuning dibuat kedip
				}
			?>
			
			
			
			</div>

			<img src="{{ asset('assets-admin-lte/dist/img/bg-dashboard.png') }}" style="width: <?= $width_bg ?>; height: <?= $height_bg ?>;">
			<!-- /.content -->
		  </div>
		  <!-- /.content-wrapper -->

		  <!-- modal -->	
			<div class="modal fade" id="modal-machine">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Information</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<!-- form start -->
						<form role="form" action="#" method="post">
						{{ csrf_field() }}
						
						<div class="form-group">
						<label for="machine_name">Machine</label>
						<input type="text" class="form-control" id="machine_name" name="machine_name" readonly>
						</div>
						
						<!-- /.box-body -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
				</div>
						</form>
				
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
		<!-- .modal-->

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

		<script>
			function preview_machine(machine){
				document.getElementById('machine_name').value = machine;
			}
		</script>
    </body>
</html>
