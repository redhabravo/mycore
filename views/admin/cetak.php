<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Monev | Cetak</title>

	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<!-- <link rel="stylesheet" href="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/Ionicons/css/ionicons.min.css"> -->

	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/dist/css/skins/_all-skins.min.css">

	<!-- Morris chart -->
  <!-- <link rel="stylesheet" href="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/morris.js/morris.css"> -->
  <!-- jvectormap -->
  <!-- <link rel="stylesheet" href="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/jvectormap/jquery-jvectormap.css"> -->
  <!-- Date Picker -->
  <!-- <link rel="stylesheet" href="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css"> -->

	<!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">

  </head>
  <body>
		<!-- jQuery 3 -->
		<script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
  	<!-- jQuery UI 1.11.4 -->
  	<script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/jquery-ui/jquery-ui.min.js"></script>
		<!-- Bootstrap 3.3.7 -->


		<!-- Main content -->
		<?php
		if(!isset($inc)){
			include('home.php');
		}else{
			include($inc.'.php');
		}
		?>

  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- Sparkline -->
  <!-- <script src="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script> -->
  <!-- jvectormap -->
  <!-- <script src="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> -->

	<!-- <script src="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
  <!-- jQuery Knob Chart -->
  <!-- <script src="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js"></script> -->
  <!-- daterangepicker -->
	<!-- <script src="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/moment/min/moment.min.js"></script> -->

  <!-- <script src="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/morris.js/morris.min.js"></script> -->

  <!-- <script src="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script> -->
  <!-- datepicker -->
  <!-- <script src="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> -->
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <!-- <script src="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script> -->
  <!-- FastClick -->
  <!-- <script src="<?php //echo base_url() ?>vendor/almasaeed2010/adminlte/bower_components/fastclick/lib/fastclick.js"></script> -->
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url() ?>vendor/almasaeed2010/adminlte/dist/js/pages/dashboard.js"></script>

</body>
</html>
