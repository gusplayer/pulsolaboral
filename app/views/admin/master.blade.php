<!DOCTYPE html>

<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es" class="no-js" data-ng-app="myApp">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8"/>
<title>Pulso Laboral</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
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
<link rel="stylesheet" type="text/css" href="admin/global/plugins/select2/select2.css"/>

<link href="admin/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<link href="admin/admin/pages/css/portfolio.css" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" type="text/css" href="admin/global/plugins/clockface/css/clockface.css"/>
<link rel="stylesheet" type="text/css" href="admin/global/plugins/bootstrap-datepicker/css/datepicker3.css"/>
<link rel="stylesheet" type="text/css" href="admin/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="admin/global/plugins/bootstrap-colorpicker/css/colorpicker.css"/>
<link rel="stylesheet" type="text/css" href="admin/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="admin/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css"/>

<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME STYLES -->
<link href="admin/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="admin/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="admin/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="admin/admin/layout2/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="admin/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="img/favicon.ico"/>

<style type="text/css">

.btn-file {
    position: relative;
    overflow: hidden;
    background-color: #1E90FF;
    color: #fff;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;

}
</style>

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
<body class="page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner container">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			               
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->
		
		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
        
        <div class="page-actions">
			<div class="btn-group ">
				
                
               
        <a href="inicio"><img src="img/logopulso.png" width="55%"></a>
        
				
			</div>
			
		</div>
        
        
		<div class="page-top">
		
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					
					
					<li class="dropdown dropdown-user">
					<a href="http://{{Session::get('username')}}.pulsolaboral.com" class="dropdown-toggle" target="_blank" >
						<img alt="" class="img-circle" src="{{Session::get('foto')}}" width="40px" height="40px"/><span class="username username-hide-on-mobile">
						<b>{{Session::get('username')}}</b>.pulsolaboral.com </span></a>
					</li>
					<li class="dropdown dropdown-user">
					    
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="img/flat/off-icon.png" width="40px" height="40px" />
						<span class="username username-hide-on-mobile">
						Admin</span>
						<i class="icon-logout"></i>
						</a>
						<ul class="dropdown-menu">
						 <li>
								<a href="inicio">
								<i class="icon-user"></i> Volver al Inicio</a>
							</li>
							<li>
								<a href="configuracion">
								<i class="icon-screen-desktop"></i> Configuración </a>
							</li>
                           
							
							<li class="divider">
							</li>
							
							<li>
								<a href="logout">
								<i class="icon-key"></i> Cerrar Sesión </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="container">
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar-wrapper">
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<div class="page-sidebar navbar-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->
				<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-auto-scroll="true" data-slide-speed="200">
					
                    
                                      
					<li
					@if ( Session::get('menu')=='perfil')
					class="start active"
					@endif
					>
						<a href="perfil">
						<i class="icon-user-following"></i>
						<span class="title">Mis datos</span>
						<span class="arrow "></span>
						</a>
						
					</li>


						<li
					@if ( Session::get('menu')=='educacion')
					class="start active"
					@endif
					>
						<a href="educacion">
						<i class="icon-graduation"></i>
						<span class="title">Educación</span>
						<span class="arrow "></span>
						</a>
						
					</li>                   
                   
                    
					
					<!-- BEGIN FRONTEND THEME LINKS -->
					<li
					@if ( Session::get('menu')=='experiencia')
					class="start active"
					@endif
					>
						<a href="experiencia">
						<i class="icon-note"></i>
						<span class="title">
						Experiencia</span>
						<span class="arrow">
						</span>
						</a>
						
					</li>

					<li
					@if ( Session::get('menu')=='habilidad')
					class="start active"
					@endif
					>
						<a href="habilidad">
						<i class="icon-list"></i>
						<span class="title">
						Habilidades</span>
						<span class="arrow">
						</span>
						</a>
						
					</li>


					<!-- END FRONTEND THEME LINKS -->
					<li
					@if ( Session::get('menu')=='portafolio')
					class="start active"
					@endif
					>
						<a href="portafolio">
						<i class="icon-briefcase"></i>
						<span class="title">Portafolio</span>
						<span class="arrow "></span>
						</a>
						
					</li>

					<li
					@if ( Session::get('menu')=='visual')
					class="start active"
					@endif
					>
						<a href="visual">
						<i class="icon-screen-desktop"></i>
						<span class="title">Diseño</span>
						<span class="arrow "></span>
						</a>
						
					</li>

						<li
					@if ( Session::get('menu')=='imprimir')
					class="start active"
					@endif
					>
						<a href="imprimir">
						<i class="icon-printer"></i>
						<span class="title">Imprimir</span>
						<span class="arrow "></span>
						</a>						
					</li>

					<li
					@if ( Session::get('menu')=='configuracion')
					class="start active"
					@endif
					>
						<a href="configuracion">
						<i class="icon-wrench"></i>
						<span class="title">Configuración</span>
						<span class="arrow "></span>
						</a>						
					</li>

					
					<li>
						<a href="logout">
						<i class="icon-shield"></i>
						<span class="title">Cerrar Sesión</span>
						<span class="arrow "></span>
						</a>
						
					</li>
					
					
					
				
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
		<!-- END SIDEBAR -->

		@yield('contenido')


@extends('admin/footer')