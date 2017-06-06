@extends('admin.master')
 
 
@section('contenido')
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				
				<!-- /.modal -->
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<!-- BEGIN STYLE CUSTOMIZER -->
				
				<!-- END STYLE CUSTOMIZER -->
				<!-- BEGIN PAGE HEADER-->
			
                 <!--<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> <h4 class="modal-title">Confirmation</h4></div>

                  <div class="alert alert-danger">
                        <button class="close" data-close="alert"></button>
                        <span>{{ Session::get('mensaje_bienvenida') }}</span>
                        </div>
                        -->
<h3 class="page-title">
				Diseñalo tu mismo, tu sitio sera unico y genial!

										</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Diseño</a>
						</li>
					</ul>
					<div class="page-toolbar">
						<div id="dashboard-report-range" class="tooltips btn btn-fit-height btn-sm red-sunglo btn-dashboard-daterange" data-container="body" data-placement="left" data-original-title="Visitar mi sitio web">
							<h4>Mi Sitio Web </h4>
							<!-- uncomment this to display selected daterange in the button 
&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp;
<i class="fa fa-angle-down"></i>
 -->
						</div>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						<div class="tabbable tabbable-custom tabbable-noborder">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#tab_1" data-toggle="tab">
									Plantillas Web</a>
								</li>
								<li>
									<a href="#tab_2" data-toggle="tab">
									Gama de Colores </a>
								</li>
								<li>
									<a href="#tab_3" data-toggle="tab">
									Imagen de Fondo </a>
								</li>
							</ul>
							<div class="tab-content">

								<div class="tab-pane active" id="tab_1">
									<!-- BEGIN FILTER -->
									<div class="filter-v1 margin-top-10">

									<ul class="mix-filter">
											<li class="filter" data-filter="all">
												 Todo
											</li>
											
										</ul>
										
										<div class="row mix-grid thumbnails">
										
										@foreach ($datos2 as $dato2)
											<div class="col-md-4 col-sm-6 mix extras" >

												<div class="mix-inner">
												<span style="
											position: absolute;
	                                        color: #FFF;
	                                        font-size: 30px;
	                                        background-color: #6495ED;
	                                        width: 100%; margin-top: 25%"><center>Diseño Actual</center></span>
													<img class="img-responsive" src="img/templates/{{$dato2->imagen}}" alt="">
													<div class="mix-details">
														
														
															<h3>Diseño Actual</h3>
														<p>
															Este increible diseño es el que esta usando en esto momento para tu web. Si quieres cambiarlos simplemente selecciona otro.
														</p>
														
													</div>
												</div>
											</div>
											@endforeach

											@foreach ($templates as $template)
											<div class="col-md-4 col-sm-6 mix extras">
												<div class="mix-inner">
													<img  class="img-responsive" src="img/templates/{{$template->imagen}}" >
													<div class="mix-details">
														<h3>{{$template->nombre}}</h3>
														<p>
															 
														</p>

														
														<a href="visual/template/{{$template->id}}" class="mix-link">
														<button type="button" class="btn btn-fit-height red-sunglo btn-lg">Usar </button>
														</a>
														<a class="mix-preview fancybox-button" href="img/templates/{{$template->imagen}}" title="{{$template->nombre}}" data-rel="fancybox-button">
														<button type="button" class="btn btn-fit-height red-sunglo btn-lg">Ver</button>
														</a>
													</div>
												</div>
											</div>
											@endforeach
											
										
										
										
										
										
											
										
										</div>
									</div>
									<!-- END FILTER -->
								</div>



								<div class="tab-pane" id="tab_3">
									<!-- BEGIN FILTER -->
									<div class="filter-v1 margin-top-10">
										<ul class="mix-filter">
											<li class="filter" data-filter="all">
												 Todo
											</li>
											
											
											<li class="filter" data-filter="Oficina">
												 Oficina
											</li>
											<li class="filter" data-filter="Fotografia">
												 Fotografia
											</li>
											<li class="filter" data-filter="Cultura">
												 Cultura
											</li>
											<li class="filter" data-filter="Deporte">
												 Deporte
											</li>
											<li class="filter" data-filter="Tecnologia">
												 Tecnologia
											</li>
											<li class="filter" data-filter="Colores">
												 Colores
											</li>
											<li class="filter" data-filter="Formas">
												 Formas
											</li>
											<li class="filter" data-filter="Naturaleza">
												 Naturaleza
											</li>
										</ul>
										<div class="row mix-grid thumbnails">

											@foreach ($datos as $dato)
											<div class="col-md-4 col-sm-6 mix {{$dato->categoria}}" >

												<div class="mix-inner">
												<span style="
											position: absolute;
	                                        color: #FFF;
	                                        font-size: 30px;
	                                        background-color: #6495ED;
	                                        width: 100%; margin-top: 25%"><center>Fondo Actual</center></span>
													<img class="img-responsive" src="img/fondos/{{$dato->url}}" alt="">
													<div class="mix-details">
														
														
															<h3>Fondo Actual</h3>
														<p>
															Esta imagen es el fondo de tu sitio web, selecciona otra de la galeria si deseas cambiarla.
														</p>
														
													</div>
												</div>
											</div>
											@endforeach

											@foreach ($fondos as $fondo)
											<div class="col-md-4 col-sm-6 mix {{$fondo->categoria}}" >
												<div class="mix-inner">
													<img class="img-responsive" src="img/fondos/{{$fondo->url}}">
													<div class="mix-details">
														<h3>{{$fondo->nombre}}</h3>
														<p>
															 
														</p>

														
														<a href="visual/fondo/{{$fondo->id}}" class="mix-link">
														<button type="button" class="btn btn-fit-height red-sunglo btn-lg">Usar </button>
														</a>
														<a class="mix-preview fancybox-button" href="img/fondos/{{$fondo->url}}" title="{{$fondo->nombre}}" data-rel="fancybox-button">
														<button type="button" class="btn btn-fit-height red-sunglo btn-lg">Ver</button>
														</a>
													</div>
												</div>
											</div>
											@endforeach
											
										
										
										
										
										
											
										
										</div>
									</div>
									<!-- END FILTER -->
								</div>


								<div class="tab-pane " id="tab_2">
									<!-- BEGIN FILTER -->
									<div class="margin-top-10">
									<ul class="mix-filter">
											<li class="filter" data-filter="all">
												 Todo
											</li>
											
										</ul>
									
									<div class="row mix-grid thumbnails">

											@foreach ($datos as $dato)


											<div class="col-md-3 col-sm-4 mix" style="height: 160px;">

												<div class="mix-inner">
												<span style="
											position: absolute;
	                                        color: #FFF;
	                                        font-size: 30px;
	                                        background-color: #6495ED;
	                                        width: 100%; margin-top: 25%"><center>Color Actual</center></span>

	                                        
	                                       <div style="border: 1px solid; border-color: gray">
	                                        <div style="height: 160px; width: 34%; float: left; background-color: {{$dato->color1}} "></div>
	                                        <div style="background-color: {{$dato->color2}}; height: 160px; width: 33%; float: left"></div>
	                                        <div style="background-color: {{$dato->color3}}; height: 160px; width: 100%;  "></div>
	                                       </div>
																					
											

													<div class="mix-details">
														
														
															<h3>Color Actual</h3>
														<p>
															Esta es la gama de colores que actualmente usa tu sitio web, puedes cambiarla por tu color favorito.
														</p>
														
													</div>
												</div>
											</div>
											
											@endforeach

											@foreach ($colores as $color)
											<div class="col-md-3 col-sm-4 mix " >
												<div class="mix-inner">

												  <div style="border: 1px solid; border-color: gray">
	                                        <div style="height: 160px; width: 34%; float: left; background-color: {{$color->color1}} "></div>
	                                        <div style="background-color: {{$color->color2}}; height: 160px; width: 33%; float: left"></div>
	                                        <div style="background-color: {{$color->color3}}; height: 160px; width: 100%;  "></div>
	                                       </div>
													
													<div class="mix-details">
														<p>{{$color->nombre1}}<br>{{$color->nombre2}}<br>{{$color->nombre3}}</p>
														
													

														
														<a href="visual/color/{{$color->id}}" class="mix-link">
														<button type="button" class="btn btn-fit-height red-sunglo btn-lg">Usar </button>
														</a>
														
													</div>
												</div>
											</div>
											@endforeach
											
										
										
										
										
										
											
										
										</div>
									</div>
									<!-- END FILTER -->
								</div>
							
								
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
@stop