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
				<h3 class="page-title">Estudios, capacitaciones y cursos.</h3>
											<p>En el siguiente formulario podras escribir algunos aspectos relacionados con tu educación. Como maximo el sistema te permitira escribir tres de ellos, los cuales pueden ser estudios universitarios, capactaciones, seminarios o cualquier curso relacionado. Si no quieres que esta información aparezca en tu sitio web simplemente deja los espacios en blanco, aunque es recomendable escribir por lo menos las mas importantes.</p>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Educación</a>

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
				
				<!-- END DASHBOARD STATS -->
				<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
							<ul class="nav nav-tabs" >
								<li class="active">
									<a href="#tab_0" data-toggle="tab" >
									Tu Educación</a>
								</li>
							</ul>
							
							<div class="tab-content">
								<div class="tab-pane active" id="tab_0">
								<div class="portlet box green-meadow">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>Donde has aprendido lo que sabes?
											</div>
											
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											{{ Form::open(array('url' => 'editar_educacion','class' => 'form-horizontal')) }}
											<form action="#" class="form-horizontal">
												
												
												@foreach($Educacion as $edu)
												<div class="form-body" style="background-color: #F8F8F8 ">
												
													@if($contador==0)
													<h3 class="form-section" style="background-color: #FAF0E6">{{++$contador}} - Tu logro educativo mas importante</h3>
													<p>* Este contenido aparecera como el primero en la lista de tus logros educativos.</p><br>
													@elseif($contador==1)
													<h3 class="form-section"  style="background-color: #FAF0E6">{{++$contador}} - Segunda experiencia educativa (opcional)</h3>
													<p>* Tienes otra experiencia educativa, registrala y tu perfil sera mas interesante.</p><br>
													@else
													<h3 class="form-section"  style="background-color: #FAF0E6">{{++$contador}} - Tercera experiencia educativa (opcional)</h3>
													<p>* Recuerda que puedes agregar cursos, capacitaciones, seminarios, entre otros.</p><br>
													@endif
													
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-4">Institución Educativa</label>
																<div class="col-md-8">
																	<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-eye"></i>
																</span>
																	<input type="text" name="instituto{{$contador}}" class="form-control"  value="{{$edu->instituto}}">
																	</div>
																	<span class="help-block">
															        Nombre del lugar o universidad donde estudiaste</span>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-4">Curso/Carrera</label>

																<div class="col-md-8">
																<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-eye"></i>
																</span>
															
																	<input type="text" class="form-control" name="titulo{{$contador}}" value="{{$edu->titulo}}">

																	</div>
																	<span class="help-block">
																	Nombre del titulo o conocimiento que recibiste.
															        </span>
																</div>
															</div>
														</div>
														<!--/span-->
													</div>
													<!--/row-->
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-4">Fecha de Inicio</label>
																<div class="col-md-8">
																	<div class="input-group">
																
																	<select name="f_inicio_mes{{$contador}}"  class="form-control input-small">
																
																
																	<option value="{{$edu->f_inicio_mes}}">{{$edu->f_inicio_mes}}</option>
																	<option value="Enero">Enero</option>
																	<option value="Febrero">Febrero</option>
																	<option value="Marzo">Marzo</option>
																	<option value="Abril">Abril</option>
																	<option value="Mayo">Mayo</option>
																	<option value="Junio">Junio</option>
																	<option value="Julio">Julio</option>
																	<option value="Agosto">Agosto</option>
																	<option value="Septiembre">Septiembre</option>
																	<option value="Octubre">Octubre</option>
																	<option value="Noviembre">Noviembre</option>
																	<option value="Diciembre">Diciembre</option>

															</select>
															<select name="f_inicio_ano{{$contador}}"  class="form-control input-small">
																
																
																	<option value="{{$edu->f_inicio_ano}}">{{$edu->f_inicio_ano}}</option>
																	<option value="2015" >2015</option>
																	<option value="2014" >2014</option>
																	<option value="2013" >2013</option>
																	<option value="2012" >2012</option>
																	<option value="2011" >2011</option>
																	<option value="2010" >2010</option>
																	<option value="2009" >2009</option>
																	<option value="2008" >2008</option>
																	<option value="2007" >2007</option>
																	<option value="2006" >2006</option>
																	<option value="2005" >2005</option>
																	<option value="2004" >2004</option>
																	<option value="2003" >2003</option>
																	<option value="2002" >2002</option>
																	<option value="2001" >2001</option>
																	<option value="2000" >2000</option>

																
																
															</select>
																	</div>
																	
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-4">Ultimo año cursado</label>
																<div class="col-md-8">
																<div class="input-group">
																
																
															<select name="f_fin_mes{{$contador}}"  class="form-control input-small">
																
																
																	<option value="{{$edu->f_fin_mes}}">{{$edu->f_fin_mes}}</option>
																	<option value="Enero">Enero</option>
																	<option value="Febrero">Febrero</option>
																	<option value="Marzo">Marzo</option>
																	<option value="Abril">Abril</option>
																	<option value="Mayo">Mayo</option>
																	<option value="Junio">Junio</option>
																	<option value="Julio">Julio</option>
																	<option value="Agosto">Agosto</option>
																	<option value="Septiembre">Septiembre</option>
																	<option value="Octubre">Octubre</option>
																	<option value="Noviembre">Noviembre</option>
																	<option value="Diciembre">Diciembre</option>

															</select>
															<select name="f_fin_ano{{$contador}}"  class="form-control input-small">
																
																
																	<option value="{{$edu->f_fin_ano}}">{{$edu->f_fin_ano}}</option>
																	<option value="2015" >2015</option>
																	<option value="2014" >2014</option>
																	<option value="2013" >2013</option>
																	<option value="2012" >2012</option>
																	<option value="2011" >2011</option>
																	<option value="2010" >2010</option>
																	<option value="2009" >2009</option>
																	<option value="2008" >2008</option>
																	<option value="2007" >2007</option>
																	<option value="2006" >2006</option>
																	<option value="2005" >2005</option>
																	<option value="2004" >2004</option>
																	<option value="2003" >2003</option>
																	<option value="2002" >2002</option>
																	<option value="2001" >2001</option>
																	<option value="2000" >2000</option>

																
																
															</select>
																	</div>
																</div>
															</div>
														</div>
														<!--/span-->
													</div>

													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-4">Estado</label>
																<div class="col-md-8">

																	<div class="radio-list">

															    																
																@if($edu->estado==0)
																<label><input type="radio" name="estado{{$contador}}" value="0" checked />Graduado con Titulo</label>
																@else
																<label><input type="radio" name="estado{{$contador}}" value="0"/>Graduado con Titulo</label>
																@endif
																
																@if($edu->estado==1)
																<label><input type="radio" name="estado{{$contador}}" value="1" checked/>Estudiando Actualmente</label>
																@else
																<label><input type="radio" name="estado{{$contador}}" value="1" />Estudiando Actualmente </label>
																@endif
																
																@if($edu->estado==2)
																<label><input type="radio" name="estado{{$contador}}" value="2" checked />No Finalizado</label>
																@else
																<label><input type="radio" name="estado{{$contador}}" value="2"/>No Finalizado</label>
																@endif

																
															</div>
																	
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-4">Resumen</label>
																<div class="col-md-8">
																<textarea class="form-control" rows="3" name="descripcion{{$contador}}">{{$edu->descripcion}}</textarea>
															<span class="help-block">
															Escribe lo mas interesante de esta experiencia</span>
																</div>
															</div>
														</div>
														<!--/span-->
													</div>
													
													<!--/row-->	

													<input type="hidden" name="id_edu{{$contador}}" value="{{$edu->id_edu}}">											

											
												</div>
												
												@endforeach
												<div class="form-actions">
													<div class="row">
														<div class="col-md-6">
															<div class="row">
																<div class="col-md-offset-3 col-md-9">
																	<button type="submit" class="btn blue">Guardar Datos</button>
																	
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
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	</div>

	
       
@stop