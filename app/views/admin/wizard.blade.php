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
				
                
               
        <img src="admin/admin/layout2/img/logo-default.png" width="60%">
        
				
			</div>
			
		</div>
        
        
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
		    
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN QUICK SIDEBAR TOGGLER -->
					
					<!-- END QUICK SIDEBAR TOGGLER -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="img/per4.jpg"/>
						<span class="username username-hide-on-mobile">
						Creando Usuario</span>
						<i class="icon-logout"></i>
						</a>
						<ul class="dropdown-menu">
							
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
				
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
		<!-- END SIDEBAR -->

		

		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				
				<!-- /.modal -->
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<!-- BEGIN STYLE CUSTOMIZER -->
				
				<!-- END STYLE CUSTOMIZER -->
				<!-- BEGIN PAGE HEADER-->
	<h3 class="page-title">
				Bienvenido por primera vez a tu panel administrativo!<br>
				</h3>
				<h4 class="form-section">Te ayudaremos a crear tu perfil rapidamente, completa los campos de abajo con tus datos.</h4>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Bienvenido</a>
							<i class="fa fa-angle-right"></i>
						</li>
						
					</ul>
					
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						<div class="portlet box blue" id="form_wizard_1">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-gift"></i> Vamos a Crear Algo Increible! - <span class="step-title">
									Paso 1 de 4 </span>
								</div>
								
							</div>
							<div class="portlet-body form">
							 {{ Form::open(array('url' => 'admin/crear','class' => 'form-horizontal','id' => 'submit_form', 'enctype'=>'multipart/form-data')) }}

						     	

								<!--<form action="admin/crear" class="form-horizontal" id="submit_form" method="POST">-->
									<div class="form">
										<div class="form-body">
											<ul class="nav nav-pills nav-justified steps">
												<li>
													<a href="#tab1" data-toggle="tab" class="step">
													<span class="number">
													1 </span>
													<span class="desc">
													<i class="fa fa-check"></i> Mis Datos </span>
													</a>
												</li>
												<li>
													<a href="#tab2" data-toggle="tab" class="step">
													<span class="number">
													2 </span>
													<span class="desc">
													<i class="fa fa-check"></i> Diseño </span>
													</a>
												</li>
												<li>
													<a href="#tab3" data-toggle="tab" class="step active">
													<span class="number">
													3 </span>
													<span class="desc">
													<i class="fa fa-check"></i> Educación </span>
													</a>
												</li>
												<li>
													<a href="#tab4" data-toggle="tab" class="step">
													<span class="number">
													4 </span>
													<span class="desc">
													<i class="fa fa-check"></i> Experiencia</span>
													</a>
												</li>
											</ul>

											<div id="bar" class="progress progress-striped" role="progressbar">
												<div class="progress-bar progress-bar-success">
												</div>
											</div>										

										
											<div class="tab-content">
												<div class="alert alert-danger display-none">
													<button class="close" data-dismiss="alert"></button>
													Tienes algunos errores o faltan datos. Por favor verifica.
												</div>

												

												<div class="tab-pane active" id="tab1">
													<h3 class="block">Bienvenido ala comunidad, cuentanos sobre ti!</h3>

													    @if($errors->has()) 											

											<div class="note note-danger">
                <button class="close" data-dismiss="alert"></button>
                    <!--recorremos los errores en un loop y los mostramos-->
                    @foreach ($errors->all('<p>:message</p>') as $message)
                        {{ $message }}
                    @endforeach
                     
                </div>
            @endif		

													

																											
													<div class="form-group">
														<label class="control-label col-md-3">Nombres</label>
														<div class="col-md-4">
														{{ Form::text('nombres', Input::old('nombres'), array('class' => 'form-control', 'required','tittle'=>'Nombre','tittle'=>'Por favor complete este campo')) }}

															
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-3">Apellidos</label>
														<div class="col-md-4">
														{{ Form::text('apellidos', null, array('class' => 'form-control', 'required','pattern'=>'[a-zA-Z0-9ñÑ ]','tittle'=>'Unicamente escriba letras, no se aceptan simbolos, tildes ni signos')) }}
															
														</div>
													</div>

													<div ng-controller="SelectPais">

													 <div class="form-group">
														<label class="control-label col-md-3">País</label>
														<div class="col-md-4">
														<select class="form-control" name="pais" ng-model="searchCountry" ng-options="item.label for item in paises track by item.value" required title="Selecciona una opción">
																	 <option value="">Seleccionar otro país </option>								            
																	 </select>
														</div>
													</div>

													 <div class="form-group" ng-if="searchCountry == empty">
														<label class="control-label col-md-3">Ubicacíon</label>
														<div class="col-md-4">
														<select class="form-control" name="region" ng-model="searchCity"  ng-disabled="!searchCountry">
																	<option value="" >Seleccione una opción</option>
                                                                    </select>
														</div>
													</div>
													
														
														 <div class="form-group" ng-if="searchCountry.value == 1">
														<label class="control-label col-md-3">Ubicacíon</label>
														<div class="col-md-4">
														<select class="form-control" name="region" ng-model="searchCity" ng-options="ci.label for ci in argentina track by ci.value| filter:searchCountry">
																	<option value="" ng-if="false"></option>
                                                                    </select>
														</div>
													</div>



														 <div class="form-group" ng-if="searchCountry.value == 2">
														<label class="control-label col-md-3">Ubicacíon</label>
														<div class="col-md-4">
														<select class="form-control" name="region" ng-model="searchCity" ng-options="ci.region for ci in colombia track by ci.value| filter:searchCountry">
																	<option value="" ng-if="false"></option>
                                                                    </select>
														</div>
													</div>



														 <div class="form-group" ng-if="searchCountry.value == 3">
														<label class="control-label col-md-3">Ubicacíon</label>
														<div class="col-md-4">
														<select class="form-control" name="region" ng-model="searchCity" ng-options="ci.label for ci in ecuador track by ci.value| filter:searchCountry">
																	<option value="" >Seleccione una opción</option>
                                                                    </select>
														</div>
													</div>



														 <div class="form-group" ng-if="searchCountry.value == 4">
														<label class="control-label col-md-3">Ubicacíon</label>
														<div class="col-md-4">
														<select class="form-control" name="region" ng-model="searchCity"  ng-options="ci.label for ci in espana track by ci.value| filter:searchCountry">
																	<option value="" >Seleccione una opción</option>
                                                                    </select>
														</div>
													</div>



														 <div class="form-group" ng-if="searchCountry.value == 5">
														<label class="control-label col-md-3">Ubicacíon</label>
														<div class="col-md-4">
														<select class="form-control" name="region" ng-model="searchCity"  ng-options="ci.label for ci in peru track by ci.value| filter:searchCountry">
																	<option value="" >Seleccione una opción</option>
                                                                    </select>
														</div>
													</div>

													 <div class="form-group" ng-if="searchCountry.value == 6">
														<label class="control-label col-md-3">Ubicacíon</label>
														<div class="col-md-4">
														<select class="form-control" name="region" ng-model="searchCity"  ng-options="ci.label for ci in bolivia track by ci.value| filter:searchCountry">
																	<option value="" >Seleccione una opción</option>
                                                                    </select>
														</div>
													</div>


													 <div class="form-group" ng-if="searchCountry.value == 7">
														<label class="control-label col-md-3">Ubicacíon</label>
														<div class="col-md-4">
														<select class="form-control" name="region" ng-model="searchCity"  ng-options="ci.label for ci in uruguay track by ci.value| filter:searchCountry">
																	<option value="" >Seleccione una opción</option>
                                                                    </select>
														</div>
													</div>


													 <div class="form-group" ng-if="searchCountry.value == 8">
														<label class="control-label col-md-3">Ubicacíon</label>
														<div class="col-md-4">
														<select class="form-control" name="region" ng-model="searchCity"  ng-options="ci.label for ci in mexico track by ci.value| filter:searchCountry">
																	<option value="" >Seleccione una opción</option>
                                                                    </select>
														</div>
													</div>


													 <div class="form-group" ng-if="searchCountry.value == 9">
														<label class="control-label col-md-3">Ubicacíon</label>
														<div class="col-md-4">
														<select class="form-control" name="region" ng-model="searchCity"  ng-options="ci.label for ci in venezuela track by ci.value| filter:searchCountry">
																	<option value="" >Seleccione una opción</option>
                                                                    </select>
														</div>
													</div>


													 <div class="form-group" ng-if="searchCountry.value == 10">
														<label class="control-label col-md-3">Ubicacíon</label>
														<div class="col-md-4">
														<select class="form-control" name="region" ng-model="searchCity"  ng-options="ci.label for ci in chile track by ci.value| filter:searchCountry">
																	<option value="" >Seleccione una opción</option>
                                                                    </select>
														</div>
													</div>

													<div class="form-group" ng-if="searchCountry.value == 11">
														<label class="control-label col-md-3">Ubicacíon</label>
														<div class="col-md-4">
														<select class="form-control" name="region" ng-model="searchCity"  ng-options="ci.label for ci in honduras track by ci.value| filter:searchCountry">
																	<option value="" >Seleccione una opción</option>
                                                                    </select>
														</div>
													</div>

													</div><!--End selecPais controller-->


												    <div class="form-group">
														<label class="control-label col-md-3">Ocupación/Profesion</label>
														<div class="col-md-4">
														{{ Form::text('ocupacion', null, array('class' => 'form-control', 'required','tittle'=>'Nombre')) }}
															
														</div>
													 </div>

													
													
													<div class="form-group">
														<label class="control-label col-md-3">Area de Trabajo</label>
														<div class="col-md-4">
															<select name="profesion"  class="form-control">
																@foreach ($profesiones as $profesion)
																	<option value={{$profesion->id_profesion}}>{{$profesion->nombre_profesion}}</option>
																@endforeach
																
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Genero
														</label>
														<div class="col-md-4">
															<div class="radio-list">
																<label>
																<input type="radio" name="genero" value="0" checked />
																Hombre</label>
																<label>
																<input type="radio" name="genero" value="1" />
																Mujer </label>
															</div>
															<div id="form_gender_error">
															</div>
														</div>
													</div>


												</div>
												<div class="tab-pane" id="tab2">
													<h3 class="block">Servicios que puedes ofrecer a un empresario</h3>

													<b>Escribe tus tres habilidades o Servicios por los que podrian contratarte.</b><br>Califica el nivel de destreza o experiencia de cada una de tus habilidades.<br><br>

												
													<div class="form-group">
														<label class="control-label col-md-3">1. Habilidad/Servicio</label>
														<div class="col-md-4">
														{{ Form::text('habilidad1', Input::old('habilidad1'), array('class' => 'form-control')) }}
														<select name="nivel1"  class="form-control">
																	<option value="100">100% Muy bueno</option>
																	<option value="90">90%</option>
																	<option value="80">80% Bueno</option>
																	<option value="70">70%</option>
																	<option value="60">60% Normal</option>
																	<option value="50">50%</option>
														</select>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-3">2. Habilidad/Servicio</label>
														<div class="col-md-4">
														{{ Form::text('habilidad2', Input::old('habilidad2'), array('class' => 'form-control')) }}
														<select name="nivel2"  class="form-control">
																	<option value="100">100% Muy bueno</option>
																	<option value="90">90%</option>
																	<option value="80">80% Bueno</option>
																	<option value="70">70%</option>
																	<option value="60">60% Normal</option>
																	<option value="50">50%</option>
														</select>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-3">3. Habilidad/Servicio</label>
														<div class="col-md-4">
														{{ Form::text('habilidad3', Input::old('habilidad3'), array('class' => 'form-control')) }}
														<select name="nivel3"  class="form-control">
																	<option value="100">100% Muy bueno</option>
																	<option value="90">90%</option>
																	<option value="80">80% Bueno</option>
																	<option value="70">70%</option>
																	<option value="60">60% Normal</option>
																	<option value="50">50%</option>
														</select>
														</div>
													</div>



												</div>
												<div class="tab-pane" id="tab3">
													<h3 class="block">Donde has estudiado?</h3>

													<h4 class="form-section">Tu perfil se vera genial con una foto tuya</h4>

													  

													<div class="form-group">
											<label class="control-label col-md-3">Tu Imagen de Perfil</label>
											<div class="col-md-9">
												<div class="fileinput fileinput-new" data-provides="fileinput">
													
													<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"><img src="img/per1.jpg">
													</div>
													<div>
														
														<span class="btn btn-default btn-file">
                                                       Subir Imagen
                                                         
                                                       {{ Form::file('foto') }}
                                                       </span>
														
														<a href="#" class="btn red fileinput-exists" data-dismiss="fileinput">
														Borrar </a>
													</div>
												</div>
												
												<span class="help-block">
															<b>Si no tienes fotos en este momento, no te preocupes.</b><br> Puedes continuar. Mas adelante podras subir tu imagen.
															</span>

											       </div>
									        	</div>
												
												</div>
												<div class="tab-pane" id="tab4">
													<h3 class="block">"La practica hace al maestro"</h3>

													<h4 class="form-section">Empezemos eligiendo nuestra direccion web</h4>

													<div class="form-group">
														<label class="control-label col-md-3">Dirección Web
														</label>
														<div class="col-md-4">
																	<div class="input-group">
																<span class="input-group-addon">
																<span>Pulsolaboral.com/</span>
																</span>
																
															
														{{ Form::text('username', Input::old('username'), array('class' => 'form-control','pattern'=>'[a-zA-Z0-9ñÑ ]','tittle'=>'Unicamente escriba letras, no se aceptan simbolos, tildes ni signos')) }}

																	</div>
																		<span class="help-block">
															<b>Tu dirección web debe ser unica</b> y te identificara dentro de Pulso Laboral, no utilices espacios ni simbolos, minimo 5 caracteres. Recuerda que debe ser algo facil, corto y creativo.
															</span>
																</div>
													</div>
												

												</div>
											</div>
										</div>
										<div class="form-actions">
											<div class="row">
												<div class="col-md-offset-3 col-md-9">
													<a href="javascript:;" class="btn default button-previous">
													<i class="m-icon-swapleft"></i> Atras </a>
													<a href="javascript:;" class="btn blue button-next">
													Continuar <i class="m-icon-swapright m-icon-white"></i>
													</a>
													{{ Form::button('Solo Enviar <i class="m-icon-swapright m-icon-white"></i>', array('type' => 'submit', 'class' => 'btn green button-submit')) }}
													
													</a>
												</div>
											</div>
										</div>
									</div>
								{{ Form::close() }}
							</div>
						</div>
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	</div>
	</div>
	<!-- END CONTAINER -->
@extends('admin/footer')