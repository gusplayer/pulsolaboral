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
				Habilidades y Servicios que puedes ofrecer.

										</h3>
										<p></p><br>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Habilidad y Servicios</a>
						</li>
						
					</ul>
					
				</div>

				<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
							<ul class="nav nav-tabs" >
								<li class="active">
									<a href="#tab_0" data-toggle="tab" >
									Tus Habilidades </a>
								</li>
									<li style="background-color: #DAA520">
									<a href="#tab_1" data-toggle="tab" style="background-color:#F8F8FF; color: #696969" >
									Tus Servicios Profesionales </a>
								</li>
							</ul>
							
							<div class="tab-content">

								<div class="tab-pane active" id="tab_0">
								<div class="portlet box blue">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>Que habilidades te hacen sobresalir?
											</div>
											
										</div>										 

										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											{{ Form::open(array('url' => 'editar_habilidad','class' => 'form-horizontal')) }}
											<form action="#" class="form-horizontal">
												<div class="form-body">
													<h3 class="form-section">Mi Lista de  Habilidades</h3>
													<p>En una o dos palabras cuentanos que habilidades te hacen sobresalir en tu trabajo.<br>
													Cuando termines con tus habilidades, escribe tu lista de <a href="#tab_1" data-toggle="tab" class="mix-link">Servicios Profesionales.</a></p><br><br>

													 @if($errors->has())
				  <div class="note note-danger">
                  <button class="close" data-dismiss="alert"></button>
                    <!--recorremos los errores en un loop y los mostramos-->
                    @foreach ($errors->all('<p>:message</p>') as $message)
                        {{ $message }}
                    @endforeach
                  </div>
                  @endif

                   @if(Session::has('mensaje_update'))           
				  <div class="note note-success">
                  <button class="close" data-dismiss="alert"></button>
                    {{ Session::get('mensaje_update') }}       
                  </div>
                  @endif

                   @if(Session::has('mensaje_error'))           
				  <div class="note note-danger">
                  <button class="close" data-dismiss="alert"></button>
                    {{ Session::get('mensaje_error') }}       
                  </div>
                  @endif
													

												   <?php $x=1; ?>
												   @foreach($habilidades as $habilidad)
												   <input type="hidden" name="idhabilidad{{$x}}" value="{{$habilidad->id_habilidad}}">
												   <div class="row">
														<div class="col-md-11">
															<div class="form-group">
																<label class="control-label col-md-1">No. {{$x}}</label>
																<div class="col-md-6">
																	<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-eye"></i>
																</span>
																	<input type="text" name="habilidad{{$x}}" class="form-control"  required placeholder="Habilidad No. {{$x}}" value="{{$habilidad->habilidad}}" >
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="radio-list">
																		<select class="select2_category form-control" name="nivel{{$x}}" required >
																		@if($habilidad->nivel)
																		<option value="{{$habilidad->nivel}}">{{$habilidad->nivel}}%</option>
																		@endif
																		<option value="">Selecciona Nivel</option>
																		<option value="100">100%</option>
																		<option value="90">90%</option>
																		<option value="80">80%</option>
																		<option value="70">70%</option>
																		<option value="60">60%</option>
																		<option value="50">50%</option>
																		<option value="40">40%</option>
																		</select>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<input type="hidden" name="contador" value="{{$x}}">
													<?php $x++; ?>
													@endforeach
													
													
													
												</div>
												<div class="form-actions">
													<div class="row">
														<div class="col-md-6">
															<div class="row">
																<div class="col-md-offset-3 col-md-9">
																	<button type="submit" class="btn green">Actualizar Datos</button>
																	
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

								<div class="tab-pane" id="tab_1">
								<div class="portlet box yellow">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>Servicios Profesionales
											</div>
											
										</div>										 

										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											{{ Form::open(array('url' => 'editar_servicio','class' => 'form-horizontal')) }}
											<form action="#" class="form-horizontal">
												<div class="form-body">
													<h3 class="form-section">Lista de Servicios que puedo ofrecer</h3>
													<p>Escribe cuatro servicios que puedes ofrecer como profesional y al una pequeña descripción de cada uno.</p><br><br>

													 @if($errors->has())
				  <div class="note note-danger">
                  <button class="close" data-dismiss="alert"></button>
                    <!--recorremos los errores en un loop y los mostramos-->
                    @foreach ($errors->all('<p>:message</p>') as $message)
                        {{ $message }}
                    @endforeach
                  </div>
                  @endif

                   @if(Session::has('mensaje_update'))           
				  <div class="note note-success">
                  <button class="close" data-dismiss="alert"></button>
                    {{ Session::get('mensaje_update') }}       
                  </div>
                  @endif

                   @if(Session::has('mensaje_error'))           
				  <div class="note note-danger">
                  <button class="close" data-dismiss="alert"></button>
                    {{ Session::get('mensaje_error') }}       
                  </div>
                  @endif
												

												 <?php $x=1; ?>
												   @foreach($servicios as $servicio)
												   <input type="hidden" name="idservicio{{$x}}" value="{{$servicio->id}}">
												   <div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label col-md-1">No. {{$x}}</label>
																<div class="col-md-3">
																	<div class="input-group">
																<span class="input-group-addon">																
																</span>
																	<input type="text" name="servicio{{$x}}" class="form-control"  required value="{{$servicio->servicio}}" placeholder="Servicio No. {{$x}}" >
																	</div>
																</div>
																	<div class="col-md-8">
																	<div class="input-group">
																<span class="input-group-addon">																
																</span>
																	<input type="text" name="des{{$x}}" class="form-control"  required placeholder="Descripción corta de este servicio" value="{{$servicio->descripcion}}" >
																	</div>
																</div>
															</div>
														</div>
													</div>													
													<?php $x++; ?>
													@endforeach

																							
												</div>
												<div class="form-actions">
													<div class="row">
														<div class="col-md-6">
															<div class="row">
																<div class="col-md-offset-3 col-md-9">
																	<button type="submit" class="btn green">Actualizar Datos</button>
																	
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

							</div>

						</div>
				
			</div>
		</div>
		
	</div>

	
@stop