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
				Crea un increible portafolio para tus trabajos.</h3>
				<p>Nunca antes ha sido tan facil crear un portafolio profesional para mostrar tus trabajos y proyectos. Podras subir contenido, una imagen con una breve descripcion, lo mejor es que tu mismo vas a crear las categorias que necesites para que se vea mas ordenado y luzca genial.</p>

										
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Portafolio de Proyectos</a>
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
									Mi Portafolio</a>
								</li>
								<li>
									<a href="#tab_2" data-toggle="tab">
									Agregar Contenido </a>
								</li>						
								<li>
									<a href="#tab_3" data-toggle="tab">
									Crear Categorias </a>
								</li>
								
							</ul>
							<div class="tab-content">

								


								
								<div class="tab-pane active" id="tab_1">
									<!-- BEGIN FILTER -->
									<div class="margin-top-10">
									<ul class="mix-filter">

									<li class="filter" data-filter="all">
												 Todo
											</li>
									@foreach ($categorias as $categoria)
									<li class="filter" data-filter="{{$categoria->id}}">
												 {{$categoria->categoria}}
									</li>
									@endforeach<!--end foreach categorias-->

									
											
											
										</ul>

									<div class="row mix-grid thumbnails">

									  <div class="col-md-3 col-sm-4 mix 0" >

												<div class="mix-inner">
											
													<img class="img-responsive" src="img/flat/cloud-icon.png"  alt="">
													<div class="mix-details">
														
														
															<h3>Nuevo</h3>
														<p>Agrega una nueva imagen a tu portafolio.</p>
															<center><a href="#tab_2" data-toggle="tab" class="mix-link" style="margin-left: 90px; padding-left: 50px; margin-right: -50px; ">
															<button type="button" class="btn btn-fit-height red-sunglo btn-lg">Agregar</button>
															</a></center>
														</p>
														
													</div>
												</div>
											</div>

											@foreach($portafolios as $portafolio)

											<div class="col-md-3 col-sm-4 mix {{$portafolio->id_categoria}}">
												<div class="mix-inner">
													<img class="img-responsive" src="portafolios/{{$portafolio->imagen}}">
													<div class="mix-details">
													    <a href="eliminar_portafolio/{{$portafolio->id}}">
														<button type="button" class="btn btn-fit-height red-sunglo btn-lg">Eliminar</button>
														</a>
														<h3>{{$portafolio->nombre}}</h3>
														<p>
														{{$portafolio->descripcion}}<br>
														
														</p>
														
													</div>
												</div>
											</div>
											@endforeach<!--end foreach portafolios-->

										</div>
									</div>
									<!-- END FILTER -->
								</div>

								<div class="tab-pane" id="tab_2">
									<div class="portlet box blue">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>Organiza tus trabajos y tus proyectos en el portafolio
											</div>
											
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											{{ Form::open(array('url' => 'guardar_portafolio','class' => 'form-horizontal','enctype'=>'multipart/form-data')) }}
											<form action="#" class="form-horizontal">
												<div class="form-body">
													<h3 class="form-section">Crea contenido para tu Portafolio</h3>

													 @if($errors->has())
				  <div class="note note-danger">
                  <button class="close" data-dismiss="alert"></button>
                    <!--recorremos los errores en un loop y los mostramos-->
                    @foreach ($errors->all('<p>:message</p>') as $message)
                        {{ $message }}
                    @endforeach                     
                  </div>
                  @endif	
											
													<div class="row">

													  <div class="form-group">


											<label class="control-label col-md-3">Subir imagen/foto</label>
											<div class="col-md-9">
												<div class="fileinput fileinput-new" data-provides="fileinput">
													
													<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 250px;"><img src="frontend/images/icon/search.png" width="100%" height="100%">
													</div>
													<div>
														
														<span class="btn btn-default btn-file">
                                                       Subir Imagen
                                                         
                                                       {{ Form::file('foto',array('required','title'=>'Seleccione una imagen para subir a su portafolio')) }}
                                                       </span>
														
														<a href="#" class="btn red fileinput-exists" data-dismiss="fileinput">
														Borrar </a>
													</div>
												</div>
												
												<span class="help-block">
															<b>Es importante que tu portafolio tenga imagenes.</b><br> Tus visitantes podran ver tus proyectos y trabajos.
															</span>

														
											</div>

											
																<div class="form-group">
																
																<label class="control-label col-md-3">Tus Categorias</label>
																<div class="col-md-6">
																		<select name="categoria"  class="form-control">
													<option value="0">Todo (Sin Especificar categoria)</option>
																@foreach ($categorias as $categoria)
												<option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
																@endforeach
																
															</select>
																</div>
														
																</div>

																<div class="form-group">
																<label class="control-label col-md-3">Nombre Proyecto</label>
																<div class="col-md-6">
																	<input type="text" name="nombre" class="form-control" placeholder="Nombre del proyecto o trabajo" value="" required>
																</div>
																</div>

																<div class="form-group">
																<label class="control-label col-md-3">Descripción Corta</label>
																<div class="col-md-6">
																	<input type="text" name="descripcion" class="form-control" placeholder="Cuentanos sobre este trabajo" value="">
																</div>
																</div>											
											           </div>
												
													 </div>
													
													
												</div>
												<div class="form-actions">
													<div class="row">
														<div class="col-md-6">
															<div class="row">
																<div class="col-md-offset-3 col-md-9">
																	<button type="submit" class="btn blue">Agregar Imagen al Portafolio</button>
																	
																</div>
															</div>
														</div>
														<div class="col-md-6">
														</div>
													</div>
												</div>
											{{ Form::close() }}
											<!-- END FORM-->
										</div>
									</div>
							


								</div>

								<div class="tab-pane " id="tab_3">
								<div class="portlet box green-meadow">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>Clasifica tus proyectos por categorias!
											</div>
											
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											{{ Form::open(array('url' => 'guardar_categoria','class' => 'form-horizontal')) }}
											<form action="#" class="form-horizontal">
												<div class="form-body">
													<h3 class="form-section">Crea categorias para tu portafolio</h3>
													
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label col-md-3"></label>
																<div class="col-md-8">
																	
																		<span class="help-block">
															
																		Sabemos que tus proyectos son unicos y te damos la libertad de crear categorias para tu portafolio, quedara mucho mas organizado. Tus visitantes quieren conocer tus trabajos mas importantes.<br><b>Cuando vayas a subir un proyecto podras asignarle una de las categorias que creaste.</b>
															</span>
																	
																</div>
															</div>
														</div>
														<!--/span-->
													</div>

													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label col-md-3">Crear Categoria</label>
																<div class="col-md-4">
																	<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-plus-circle"></i>
																</span>
																
															
																	<input type="text" class="form-control" name="categoria">

																	

																	</div>
																</div>
																<div class="col-md-3">
																<button type="submit" class="btn blue">Crear Categoria</button>
																</div>
															</div>
														</div>
														<!--/span-->
													</div>

													<div class="table-responsive">
													<table class="table table-bordered">
									@if($categorias)
									<thead>
									<tr>
										
										<th>
											Tus Categorias
										</th>
										
										<th>
											 Eliminar
										</th>
										
									</tr>
									</thead>
							        @endif

									@foreach($categorias as $categoria)
									<tbody>
									<tr>										
										<td>
											 {{$categoria->categoria}}
										</td>
										
										<td>
											<a href="eliminar_categoria/{{$categoria->id}}"> <img src="img/flat/eliminar.png" width="25px">Eliminar</a>
										</td>									
									</tr>
									@endforeach
									
									
									</tbody>
									</table>
									</div>


												

													
													<!--/row-->
													
													<!--/row-->
													
													
													
													
													
													<!--/row-->
													
													<!--/row-->
												</div>
												
											{{ Form::close() }}
											<!-- END FORM-->
										</div>
									</div>


									
									
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