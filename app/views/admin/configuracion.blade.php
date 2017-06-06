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
				Configuración Personal

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
							<a href="#">Configuración Personal</a>
						</li>
						
					</ul>
					
				</div>

					
				<!-- END PAGE HEADER-->
				
				<!-- END DASHBOARD STATS -->
				<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
							<ul class="nav nav-tabs" >
								<li class="active">
									<a href="#tab_0" data-toggle="tab" >
									Cambiar Contraseña </a>
								</li>
							</ul>
							
							<div class="tab-content">
								<div class="tab-pane active" id="tab_0">
								<div class="portlet box blue">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>La mejor seguridad para tu información
											</div>
											
										</div>										 

										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											{{ Form::open(array('url' => 'editar_pass','class' => 'form-horizontal')) }}
											<form action="#" class="form-horizontal">
												<div class="form-body">
													<h3 class="form-section">Cambiar Constraseña</h3>

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
													<div class="row">
														<div class="col-md-10">
															<div class="form-group">
																<label class="control-label col-md-3">Contraseña anterior</label>
																<div class="col-md-9">
																	<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-eye"></i>
																</span>
																	<input type="password" name="anterior" class="form-control"  required placeholder="Contraseña Actual" autocomplete="off" >
																	</div>
																</div>
															</div>
														</div>
														<!--/span-->
														
														<!--/span-->
													</div>

													<div class="row">
														<div class="col-md-10">
															<div class="form-group">
																<label class="control-label col-md-3">Contraseña Nueva</label>
																<div class="col-md-9">
																	<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-eye"></i>
																</span>
																	<input type="password" name="nuevopassword" class="form-control" required placeholder="Nueva Contraseña" autocomplete="off">
																	</div>
																</div>
															</div>
														</div>
														<!--/span-->
														
														<!--/span-->
													</div>

													<div class="row">
														<div class="col-md-10">
															<div class="form-group">
																<label class="control-label col-md-3">Repetir Nueva</label>
																<div class="col-md-9">
																	<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-eye"></i>
																</span>
																	<input type="password" name="renuevo" class="form-control" required placeholder="Repetir Nueva Contraseña" autocomplete="off">
																	</div>
																</div>
															</div>
														</div>
														<!--/span-->
														
														<!--/span-->
													</div>
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

							</div>
						</div>
				
			</div>
		</div>
		
	</div>

	
@stop