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
				Administrador de Contenidos

										</h3>
										<p>El administrador de contenidos te permitira crear, diseñar y modificar tu sitio web profesional. Tendras la libertad de modificarlo cuantas veces quieras y de inmediato. Tus clientes, amigos y empresarios que visiten Pulso Laboral en busca de servicios podran ver el perfil de un verdadero profesional. <br><br>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Panel Principal</a>
						</li>
						
					</ul>
					
				</div>

					
				<!-- END PAGE HEADER-->
				
				<!-- END DASHBOARD STATS -->
				<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
							<ul class="nav nav-tabs" >
								<li class="active">
									<a href="#tab_0" data-toggle="tab" >
									Información Personal </a>
								</li>
								<li class="">
									<a href="#tab_1" data-toggle="tab">
									Imagen de Perfil </a>
								</li>
								<li class="">
									<a href="#tab_2" data-toggle="tab">
									Mi Dirección Web</a>
								</li>
									<li class="">
									<a href="#tab_3" data-toggle="tab">
									Redes Sociales</a>
								</li>
									<li class="">
									<a href="#tab_4" data-toggle="tab">
									Tu Descripción</a>
								</li>
								
								
								
							</ul>
							@foreach ($datos as $dato)
							<div class="tab-content">
								<div class="tab-pane active" id="tab_0">
								<div class="portlet box blue">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>Actualiza tus datos cuando quieras!
											</div>
											
										</div>										 

										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											{{ Form::open(array('url' => 'editar_perfil','class' => 'form-horizontal')) }}
											<form action="#" class="form-horizontal">
												<div class="form-body">
													<h3 class="form-section">Información Personal</h3>

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
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Nombres</label>
																<div class="col-md-9">
																	<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-eye"></i>
																</span>
																	<input type="text" name="nombre" class="form-control"  value="{{$dato->nombre}}" required pattern="[a-zA-Z0-9ñÑáéíóú ]+" title="Unicamente escriba letras, no se aceptan simbolos, tildes ni signos">
																	</div>
																</div>
															</div>
														</div>
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Apellidos</label>
																<div class="col-md-9">
																<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-eye"></i>
																</span>															
															
																	<input type="text" class="form-control" name="apellido" value="{{$dato->apellido}}" required pattern="[a-zA-Z0-9ñÑáéíóú ]+" title="Unicamente escriba letras, no se aceptan simbolos ni signos">
																	</div>
																</div>
															</div>
														</div>
														<!--/span-->
													</div>
													<!--/row-->
													
													<!--/row-->
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Edad</label>
																<div class="col-md-9">
																	<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-eye"></i>
																</span>
																
															
																	<input type="text" class="form-control" name="edad" value="{{$dato->fecha_nac}}" required pattern="[0-9 ]+" title="Ese campo solo permite escribir números">
																	</div>
																	
																</div>
															</div>
														</div>
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Genero</label>
																<div class="col-md-9">
																	<div class="radio-list">

																		<select class="select2_category form-control" name="genero">
																		@if($dato->genero==0)
															<option value="0">Hombre</option>
															@else {
															<option value="1">Mujer</option>
															}
															@endif
																		<option value="0">Hombre</option>
																		<option value="1">Mujer</option>
																		
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
																<label class="control-label col-md-3">Ocupación</label>
																<div class="col-md-9">
																	<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-eye"></i>
																</span>
																<input type="text" class="form-control" name="ocupacion" value="{{$dato->ocupacion}}" required placeholder="A que te dedicas?" pattern="[a-zA-Z0-9ñÑáéíóú ]+" title="Ingresa un formato valido">
															</div>
																</div>
															</div>
														</div>
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Categoria</label>
																<div class="col-md-9">
																		<select name="profesion"  class="form-control">
													<option value={{$dato->profesiones}}>{{$dato->nombre_profesion}}</option>
																@foreach ($profesiones as $profesion)
												<option value={{$profesion->id_profesion}}>{{$profesion->nombre_profesion}}</option>
																@endforeach
																
															</select>
																</div>
															</div>
														</div>
														<!--/span-->
													</div>

													

													<h3 class="form-section">Información de Contacto </h3>
													<p>Tu ubicación actual es: 
													<b>{{$dato->nombrepais}}</b>, 
													{{$dato->nombreregion}} , {{$dato->ciudad}}</p><br>


													<!--/row-->													
													<div ng-controller="SelectPais">




													<div class="row">
													    <div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">País</label>
																<div class="col-md-9">
																	<select class="form-control" name="pais" ng-model="searchCountry" ng-options="item.label for item in paises track by item.value">
																	 <option value="">Seleccionar otro país </option>								            
																	 </select>
														           
																</div>
															</div>
														</div>

														<input type="hidden" value="{{$dato->pais}}" name="pais" ng-if="searchCountry.value == empty">
													

														<div class="col-md-6" ng-if="searchCountry == empty">
															<div class="form-group">
																<label class="control-label col-md-3">Ubicación</label>
																<div class="col-md-9">
																	<select class="form-control" name="region" ng-model="searchCity"  ng-disabled="!searchCountry">
																	<option value="" >Seleccione una opción</option>
                                                                    </select>
                                                                    <input type="hidden" value="{{$dato->region}}" name="region">
																</div>
															</div>
														</div>


														<!--Argentina-->
														<div class="col-md-6" ng-if="searchCountry.value == 1">
															<div class="form-group">
																<label class="control-label col-md-3">Ubicación</label>
																<div class="col-md-9">
																	<select class="form-control" name="region" ng-model="searchCity" ng-options="ci.label for ci in argentina track by ci.value| filter:searchCountry">
																	<option value="" ng-if="false"></option>
                                                                    </select>
																</div>
															</div>
														</div>

														<!--Colombia-->
														<div class="col-md-6" ng-if="searchCountry.value == 2">
															<div class="form-group">
																<label class="control-label col-md-3">Ubicación</label>
																<div class="col-md-9">
																	<select class="form-control" name="region" ng-model="searchCity" ng-options="ci.region for ci in colombia track by ci.value| filter:searchCountry">
																	<option value="" ng-if="false"></option>
                                                                    </select>
																</div>
															</div>
														</div>

															<!--Ecuador-->
														<div class="col-md-6" ng-if="searchCountry.value == 3">
															<div class="form-group">
																<label class="control-label col-md-3">Ubicación</label>
																<div class="col-md-9">
																	<select class="form-control" name="region" ng-model="searchCity" ng-options="ci.label for ci in ecuador track by ci.value| filter:searchCountry">
																	<option value="" ng-if="false"></option>
                                                                    </select>
																</div>
															</div>
														</div>

															<!--España-->
														<div class="col-md-6" ng-if="searchCountry.value == 4">
															<div class="form-group">
																<label class="control-label col-md-3">Ubicación</label>
																<div class="col-md-9">
																	<select class="form-control" name="region" ng-model="searchCity" ng-options="ci.label for ci in espana track by ci.value| filter:searchCountry">
																	<option value="" ng-if="false"></option>
                                                                    </select>
																</div>
															</div>
														</div>

															<!--Peru-->
														<div class="col-md-6" ng-if="searchCountry.value == 5">
															<div class="form-group">
																<label class="control-label col-md-3">Ubicación</label>
																<div class="col-md-9">
																	<select class="form-control" name="region" ng-model="searchCity" ng-options="ci.label for ci in peru track by ci.value| filter:searchCountry">
																	<option value="" ng-if="false"></option>
                                                                    </select>
																</div>
															</div>
														</div>

															<!--Bolivia-->
														<div class="col-md-6" ng-if="searchCountry.value == 6">
															<div class="form-group">
																<label class="control-label col-md-3">Ubicación</label>
																<div class="col-md-9">
																	<select class="form-control" name="region" ng-model="searchCity" ng-options="ci.label for ci in bolivia track by ci.value| filter:searchCountry">
																	<option value="" ng-if="false"></option>
                                                                    </select>
																</div>
															</div>
														</div>

															<!--Uruguay-->
														<div class="col-md-6" ng-if="searchCountry.value == 7">
															<div class="form-group">
																<label class="control-label col-md-3">Ubicación</label>
																<div class="col-md-9">
																	<select class="form-control" name="region" ng-model="searchCity" ng-options="ci.label for ci in uruguay track by ci.value| filter:searchCountry">
																	<option value="" ng-if="false"></option>
                                                                    </select>
																</div>
															</div>
														</div>

															<!--Mexico-->
														<div class="col-md-6" ng-if="searchCountry.value == 8">
															<div class="form-group">
																<label class="control-label col-md-3">Ubicación</label>
																<div class="col-md-9">
																	<select class="form-control" name="region" ng-model="searchCity" ng-options="ci.label for ci in mexico track by ci.value| filter:searchCountry">
																	<option value="" ng-if="false"></option>
                                                                    </select>
																</div>
															</div>
														</div>

															<!--Venezuela-->
														<div class="col-md-6" ng-if="searchCountry.value == 9">
															<div class="form-group">
																<label class="control-label col-md-3">Ubicación</label>
																<div class="col-md-9">
																	<select class="form-control" name="region" ng-model="searchCity" ng-options="ci.label for ci in venezuela track by ci.value| filter:searchCountry">
																	<option value="" ng-if="false"></option>
                                                                    </select>
																</div>
															</div>
														</div>

															<!--Chile-->
														<div class="col-md-6" ng-if="searchCountry.value == 10">
															<div class="form-group">
																<label class="control-label col-md-3">Ubicación</label>
																<div class="col-md-9">
																	<select class="form-control" name="region" ng-model="searchCity" ng-options="ci.label for ci in chile track by ci.value| filter:searchCountry">
																	<option value="" ng-if="false"></option>
                                                                    </select>
																</div>
															</div>
														</div>

															<!--Honduras-->
														<div class="col-md-6" ng-if="searchCountry.value == 11">
															<div class="form-group">
																<label class="control-label col-md-3">Ubicación</label>
																<div class="col-md-9">
																	<select class="form-control" name="region" ng-model="searchCity" ng-options="ci.label for ci in honduras track by ci.value| filter:searchCountry">
																	<option value="" ng-if="false"></option>
                                                                    </select>
																</div>
															</div>
														</div>
														
													</div><!--endo row-->

													</div><!--<div ng-include src="'includes/paises.html'"></div>-->



													

													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Ciudad</label>
																<div class="col-md-9">
																	<input type="text" name="ciudad" class="form-control" placeholder="Ciudad Actual" value="{{$dato->ciudad}}" required placeholder="Ciudad" pattern="[a-zA-Z0-9ñÑáéíóú ]+" title="Ingresa solo numeros, no se permiten simbolos o signos especiales">
																</div>
															</div>
														</div>
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Dirección</label>
																<div class="col-md-9">
																	<input type="text" class="form-control" name="direccion" value="{{$dato->direccion}}" placeholder="Dirección" pattern="[a-zA-Z0-9ñÑ:/()-#.+ ]+" title="Ingresa un formato valido">
																</div>
															</div>
														</div>
														<!--/span-->
													</div>
													<!--/row-->
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Telefono</label>
																<div class="col-md-9">
																	<input type="text" class="form-control" name="telefono" value="{{$dato->telefono}}" placeholder="Telefono" pattern="[0-9-+()#. ]+" title="Ingresa solo numeros, no se permiten simbolos o signos especiales">
																</div>
															</div>
														</div>
														<!--/span-->
														<!--<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Email</label>
																<div class="col-md-9">
																	
																	<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-envelope"></i>
																</span>
																<input type="text" class="form-control" name="email" value="{{Auth::user()->email; }}">
															</div>
																</div>
																
															</div>
														</div>-->
														<!--/span-->
													</div>
													
												
													<!--/row-->
												
													<!--/row-->
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
									<div class="portlet box green">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>Una imagen vale mas que mil palabras!
											</div>
											
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											{{ Form::open(array('url' => 'editar_imagen_perfil','class' => 'form-horizontal','enctype'=>'multipart/form-data')) }}
											<form action="#" class="form-horizontal">
												<div class="form-body">
													<h3 class="form-section">Foto de Perfil</h3>

													 @if($errors->has())
				 
				  <div class="note note-danger">
                  <button class="close" data-dismiss="alert"></button>
                    <!--recorremos los errores en un loop y los mostramos-->
                    @foreach ($errors->all('<p>:message</p>') as $message)
                        {{ $message }}
                    @endforeach                     
                  </div>
                  @endif													
													<!--/row-->
													
													<!--/row-->	
													<div class="row">
													  
													  <div class="form-group">
											<label class="control-label col-md-3">Tu Imagen de Perfil</label>
											<div class="col-md-9">
												<div class="fileinput fileinput-new" data-provides="fileinput">
													
													<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 250px;"><img src="{{$dato->foto_perfil}}" width="100%" height="100%">
													</div>
													<div>
														
														<span class="btn btn-default btn-file">
                                                       Subir Imagen
                                                         
                                                       {{ Form::file('foto', array('required','tittle'=>'Foto de Perfil')) }}
                                                       <input type="hidden" name="anterior" value="{{$dato->foto_perfil}}">
                                                       </span>
														
														<a href="#" class="btn red fileinput-exists" data-dismiss="fileinput">
														Borrar </a>
													</div>
												</div>
												
												<span class="help-block">
															<b>Si no tienes fotos en este momento, no te preocupes.</b><br> Puedes continuar. Mas adelante podras subir tu imagen.
															</span>
											</div></div>





												
													 </div>
													
													<!--/row-->
													
												
													<!--/row-->
													
													<!--/row-->
												</div>
												<div class="form-actions">
													<div class="row">
														<div class="col-md-6">
															<div class="row">
																<div class="col-md-offset-3 col-md-9">
																	<button type="submit" class="btn green">Subir Imagen</button>
																	
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
									<div class="tab-pane" id="tab_2">
								<div class="portlet box red-sunglo">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>Un nombre creativo para tu sitio web!
											</div>
											
										</div>
										<div class="portlet-body form">

										
										

											<!-- BEGIN FORM-->
											{{ Form::open(array('url' => 'editar_username','class' => 'form-horizontal')) }}
											<form action="#" class="form-horizontal">
												<div class="form-body">
													<h3 class="form-section">Dirección de tu Pagina web</h3>
													
													<!--/row-->
													
													<!--/row-->
													
												
													<div class="row">													

									            	    	<div class="col-md-12">

									         <!--si existe algun error al cambiar el nombre de usuario, mostrado con detalles-->
									         @if($errors->has())

											
											<div class="note note-danger">
                                            <button class="close" data-dismiss="alert"></button>
                                             <!--recorremos los errores en un loop y los mostramos-->
                                            @foreach ($errors->all('<p>:message</p>') as $message)
                                            {{ $message }}
                                            @endforeach
                     
                                            </div>
                                            @endif<!--end if errors-->


															<div class="form-group">
																<label class="control-label col-md-3">Tu Dirección Web</label>
																<div class="col-md-8">
																	<div class="input-group">
																<span class="input-group-addon">
																www.pulsolaboral.com/
																</span>
																
															  @foreach($plantilla as $plant)
																	<input type="text" class="form-control" name="username" value="{{$plant->username}}" required 
																	placeholder="Utiliza solo letras y numeros, sin espacios ni simbolos" pattern="[a-zA-Z0-9]+" title="Ingresa solo letras y numeros, no se permiten simbolos o signos especiales">
															  @endforeach

																	</div>
																		<span class="help-block">
															<b>Tu dirección web debe ser unica y solo puede contener letras y números.</b> Te identificara dentro de Pulso Laboral, no utilices espacios ni simbolos. Tu nombre de usuario permitira a otros usuarios ir directo a tu sitio web, asi que debe ser algo facil, corto y creativo.
															</span>
																	
																</div>
															</div>
														</div>

													 </div>
											
												
													<!--/row-->
												
													<!--/row-->
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

									<div class="tab-pane " id="tab_3">
								<div class="portlet box yellow-crusta">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>Integración completa con tu redes!
											</div>
											
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											{{ Form::open(array('url' => 'editar_redes','class' => 'form-horizontal')) }}
											<form action="#" class="form-horizontal">
												<div class="form-body">
													<h3 class="form-section">Tus Redes Sociales</h3>
													
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label col-md-3"></label>
																<div class="col-md-8">
																	
																		<span class="help-block">
															
																		Sabemos lo importante que son las redes sociales para ti, por eso podras agregarlas a tu sitio web. <b>Escribe o copia la URL o LINK de tu perfil en cada red social</b>. Si no utilizas alguna de las siguientes redes sociales, simplemente deja el espacio en blanco.
															</span>
																	
																</div>
															</div>
														</div>
														<!--/span-->
													</div>
													@foreach($redes as $red)

													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label col-md-3" style="background-color:  ">Facebook</label>
																<div class="col-md-8">
																	<div class="input-group">
																<span class="input-group-addon">
																F
																</span>
																
															
																	<input type="text" class="form-control" name="facebook" value="{{$red->facebook}}" placeholder="http://www.facebook.com/usuario" pattern="[a-zA-Z0-9_:./]+" title="Copie y pegue el enlace de su usuario o pagina de facebook">

																	</div>
																		
																	
																</div>
															</div>
														</div>
														<!--/span-->
													</div>

													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label col-md-3">Twitter</label>
																<div class="col-md-8">
																	<div class="input-group">
																<span class="input-group-addon">
																T
																</span>
																
															
																	<input type="text" class="form-control" name="twitter" value="{{$red->twitter}}" value="{{$red->dribbble}}" placeholder="Copia el link de tu red en este campo" pattern="[a-zA-Z0-9:_,./@]+" title="Ingresa solo letras y numeros, no se permiten simbolos o signos especiales">

																	</div>
																		
																	
																</div>
															</div>
														</div>
														<!--/span-->
													</div>


														<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label col-md-3" style="background-color:  ">Instagram</label>
																<div class="col-md-8">
																	<div class="input-group">
																<span class="input-group-addon">
																I
																</span>
																
															
																	<input type="text" class="form-control" name="instagram" value="{{$red->instagram}}" value="{{$red->dribbble}}" placeholder="Copia el link de tu red en este campo" pattern="[a-zA-Z0-9:_,./@]+" title="Ingresa solo letras y numeros, no se permiten simbolos o signos especiales">

																	</div>
																		
																	
																</div>
															</div>
														</div>
														<!--/span-->
													</div>

													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label col-md-3">Youtube</label>
																<div class="col-md-8">
																	<div class="input-group">
																<span class="input-group-addon">
																Y
																</span>
																
															
																	<input type="text" class="form-control" name="youtube" value="{{$red->youtube}}" value="{{$red->dribbble}}" placeholder="Copia el link de tu red en este campo" pattern="[a-zA-Z0-9:_,./@]+" title="Ingresa solo letras y numeros, no se permiten simbolos o signos especiales">

																	</div>
																		
																	
																</div>
															</div>
														</div>
														<!--/span-->
													</div>

													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label col-md-3">Google+</label>
																<div class="col-md-8">
																	<div class="input-group">
																<span class="input-group-addon">
																G
																</span>
																
															
																	<input type="text" class="form-control" name="google" value="{{$red->google}}" value="{{$red->dribbble}}" placeholder="Copia el link de tu red en este campo" pattern="[a-zA-Z0-9:_,./@]+" title="Ingresa solo letras y numeros, no se permiten simbolos o signos especiales">

																	</div>
																		
																	
																</div>
															</div>
														</div>
														<!--/span-->
													</div>


													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label col-md-3">Pinterest</label>
																<div class="col-md-8">
																	<div class="input-group">
																<span class="input-group-addon">
																P
																</span>
																
															
																	<input type="text" class="form-control" name="pinterest" value="{{$red->pinterest}}" value="{{$red->dribbble}}" placeholder="Copia el link de tu red en este campo" pattern="[a-zA-Z0-9:_,./@]+" title="Ingresa solo letras y numeros, no se permiten simbolos o signos especiales">

																	</div>
																		
																	
																</div>
															</div>
														</div>
														<!--/span-->
													</div>

													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label col-md-3">Linkedin</label>
																<div class="col-md-8">
																	<div class="input-group">
																<span class="input-group-addon">
																L
																</span>
																
															
																	<input type="text" class="form-control" name="linkedin" value="{{$red->linkedin}}" value="{{$red->dribbble}}" placeholder="Copia el link de tu red en este campo" pattern="[a-zA-Z0-9:_,./@]+" title="Ingresa solo letras y numeros, no se permiten simbolos o signos especiales">

																	</div>
																		
																	
																</div>
															</div>
														</div>
														<!--/span-->
													</div>

													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label col-md-3">Dribbble</label>
																<div class="col-md-8">
																	<div class="input-group">
																<span class="input-group-addon">
																D
																</span>
																
															
																	<input type="text" class="form-control" name="dribbble" value="{{$red->dribbble}}" placeholder="Copia el link de tu red en este campo" pattern="[a-zA-Z0-9:_,./@]+" title="Ingresa solo letras y numeros, no se permiten simbolos o signos especiales">

																	</div>
																		
																	
																</div>
															</div>
														</div>
														<!--/span-->
													</div>

													@endforeach
												</div>
												<div class="form-actions">
													<div class="row">
														<div class="col-md-6">
															<div class="row">
																<div class="col-md-offset-3 col-md-9">
																	<button type="submit" class="btn green">Actualizar Redes Sociales</button>
																	
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



									<div class="tab-pane " id="tab_4">
								<div class="portlet box green-meadow">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>Escribe sobre tus cualidades.
											</div>
											
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											{{ Form::open(array('url' => 'editar_descripcion','class' => 'form-horizontal')) }}
											<form action="#" class="form-horizontal">
												<div class="form-body">
													<h3 class="form-section">Cuentanos sobre ti, queremos conocerte.</h3>
													
													  <!--si existe algun error al cambiar el nombre de usuario, mostrado con detalles-->
									         @if($errors->has())
											
											<div class="note note-danger">
                                            <button class="close" data-dismiss="alert"></button>
                                             <!--recorremos los errores en un loop y los mostramos-->
                                            @foreach ($errors->all('<p>:message</p>') as $message)
                                            {{ $message }}
                                            @endforeach
                     
                                            </div>
                                            @endif<!--end if errors-->

													<div class="row">

													  <div class="col-md-12">
													     <div class="form-group">
											              <label class="col-md-3 control-label">Descripción</label>
										                 	<div class="col-md-9">
											                    											                     
											                      @if($errors->has())
											                      {{ Form::textarea('resumen' ,Input::old('resumen'), ['size' => '60x4'],array('required','tittle'=>'Cuentanos algo sobre ti, recuerda usar solo letras y numeros, no se permiten simbolos o signos especiales')) }}
											                      @else
											                      {{ Form::textarea('resumen',$dato->resumen, ['size' => '60x4'],array('required','tittle'=>'Cuentanos algo sobre ti, recuerda usar solo letras y numeros, no se permiten simbolos o signos especiales')) }}
											                      @endif

										                    </div>
									                    </div>
									            	    </div>

									            	    

													 </div>
													
													
													<!--/row-->
													
													<!--/row-->
												</div>
												<div class="form-actions">
													<div class="row">
														<div class="col-md-6">
															<div class="row">
																<div class="col-md-offset-3 col-md-9">
																	<button type="submit" class="btn green">Actualizar mi Descripción</button>
																	
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
								 @endforeach  
								
							
								
								
						





							</div>
						</div>
				
			
				
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	</div>

	<!-- END CONTAINER -->
		<!-- @if(Session::has('mensaje_bienvenida'))
                     <div id="static" class="modal fade in" tabindex="-1" data-backdrop="static" data-keyboard="true" aria-hidden="true" style="display: block;">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
												<h4 class="modal-title">Confirmation</h4>
											</div>
											<div class="modal-body">
												<p>
													 Would you like to continue with some arbitrary task?
												</p>
											</div>
											<div class="modal-footer">
												<button type="button" data-dismiss="modal" class="btn green">Continue Task</button>
											</div>
										</div>
									</div>
								</div>

<div class="modal-backdrop fade in"></div>
        @endif-->
       
@stop