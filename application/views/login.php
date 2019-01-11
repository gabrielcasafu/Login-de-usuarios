<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login de Usuarios | By Gabriel Casafu</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>asset/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/wave/waves.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/notika-custom-icon.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Login Register area Start-->
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
        	<form action="" method="post">
	            <div class="nk-form">
	                <div class="input-group">
	                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
	                    <div class="nk-int-st">
	                        <input type="text" class="form-control" name="txtUsuario" placeholder="Username">
	                        <span class="text-danger text-left"><?php echo form_error('txtUsuario'); ?></span>
	                    </div>
	                </div>
	                <div class="input-group mg-t-15">
	                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
	                    <div class="nk-int-st ">
	                        <input type="password" class="form-control" name="txtPassword" placeholder="Password">
	                        <span class="text-danger text-left"><?php echo form_error('txtPassword'); ?></span>
	                    </div>
	                </div>
	                <div class="fm-checkbox">
                    	<label> <i></i> <?php echo $this->session->flashdata("error"); 	?></label>
                	</div>

	                <button type="submit" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>

	            </div>
	        </form>
	        <br><br>
        </div>

    </div>
    <!-- Login Register area End-->
    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/knob/jquery.knob.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/knob/jquery.appear.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/chat/jquery.chat.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/wave/waves.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/icheck/icheck-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/todo/jquery.todo.js"></script>
    <!-- Login JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/login/login-action.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url(); ?>asset/js/main.js"></script>
</body>

</html>