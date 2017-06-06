<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->
<!-- BEGIN HEAD -->


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8"/>
<title>Pulso Laboral</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
<link href="admin/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="admin/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="admin/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="admin/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">   
<link href="admin/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="admin/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="admin/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="admin/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="admin/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="admin/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="admin/admin/layout2/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="admin/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="fronted/images/favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
	<img src="frontend/images/logo.png" alt="" width="150" />
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	{{ Form::open(array('url' => 'login')) }}
		<center><h3 class="form-title">Entrar a tu cuenta</h3></center>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Debes escribir tus datos de acceso </span>
		</div>
		 @if(Session::has('mensaje_error'))
                        <div class="alert alert-danger">
                        <button class="close" data-close="alert"></button>
                        <span>{{ Session::get('mensaje_error') }}</span>
                        </div>
         @endif
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			{{ Form::label('email', 'Correo Electronico', array('class' => 'control-label visible-ie8 visible-ie9')) }}
			<div class="input-icon">
				<i class="fa fa-user"></i>
				{{ Form::text('email', null, array('class' => 'form-control placeholder-no-fix','placeholder' => 'Correo Electronico')) }}
				
			</div>
		</div>
		<div class="form-group">
		{{ Form::label('pass', 'Contraseña', array('class' => 'control-label visible-ie8 visible-ie9')) }}
			
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				{{ Form::password('pass', array('class' => 'form-control placeholder-no-fix','placeholder' => 'Contraseña')) }}
				
			</div>
		</div>
		<div class="form-actions">
			<label class="checkbox">
			<input type="checkbox" name="remember" value="1"/> Recordar datos </label>
			<button type="submit" class="btn blue pull-right">
			Iniciar Sesión <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		<!--<div class="login-options">
			<h4>Or login with</h4>
			<ul class="social-icons">
				<li>
					<a class="facebook" data-original-title="facebook" href="#">
					</a>
				</li>
				<li>
					<a class="twitter" data-original-title="Twitter" href="#">
					</a>
				</li>
				<li>
					<a class="googleplus" data-original-title="Goole Plus" href="#">
					</a>
				</li>
				<li>
					<a class="linkedin" data-original-title="Linkedin" href="#">
					</a>
				</li>
			</ul>
		</div>-->
		<div class="forget-password">
			<h4>Olvidaste tus datos ?</h4>
			<p>
				 No te preocupes, click <a href="#">
				aqui </a>
				para ayudarte.
			</p>
		</div>
		<div class="create-account">
			<p>
				 Eres un usuario nuevo ?&nbsp; <a href="registro">
				Registrate gratis </a>
			</p>
		</div>
	{{ Form::close() }}
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<!--<form class="forget-form" action="http://www.keenthemes.com/preview/metronic/theme/templates/admin2/index.html" method="post">
		<h3>Forget Password ?</h3>
		<p>
			 Enter your e-mail address below to reset your password.
		</p>
		<div class="form-group">
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn">
			<i class="m-icon-swapleft"></i> Back </button>
			<button type="submit" class="btn blue pull-right">
			Submit <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>-->
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	
	<!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2014 &copy; Pulso Laboral Colombia.
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="admin/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="admin/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="admin/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="admin/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="admin/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="admin/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="admin/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="admin/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="admin/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="admin/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="admin/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="admin/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="admin/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="admin/global/scripts/metronic.js" type="text/javascript"></script>
<script src="admin/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="admin/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="admin/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
  Login.init();
       // init background slide images
       $.backstretch([
        "admin/admin/pages/media/bg/1.jpg",
        "admin/admin/pages/media/bg/2.jpg",
        "admin/admin/pages/media/bg/3.jpg",
        "admin/admin/pages/media/bg/4.jpg"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>
<!-- END JAVASCRIPTS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37564768-1', 'keenthemes.com');
  ga('send', 'pageview');
</script>
</body>

<!-- END BODY -->

<!-- Mirrored from www.keenthemes.com/preview/metronic/theme/templates/admin2/login_soft.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Oct 2014 04:28:31 GMT -->
</html>