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
				Imprime, comparte o guarda tu CV

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
							<a href="#">Imprime tu CV</a>
						</li>
						
					</ul>
					
				</div>

					
				<!-- END PAGE HEADER-->
				
				<!-- END DASHBOARD STATS -->
				<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
							<ul class="nav nav-tabs" >
								<li class="active">
									<a href="#tab_0" data-toggle="tab" >
									Diseños para imprimir </a>
								</li>
							</ul>
							
							<div class="tab-content">
								<div class="tab-pane active" id="tab_0">
								<div class="portlet box blue">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>Tu CV con un increible diseño
											</div>
											
										</div>										 

										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											
											<form action="#" class="form-horizontal">
												<div class="form-body">
													<h3 class="form-section">Un diseño increible para imprimir tu CV</h3>

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
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label col-md-10"><h1>Exclusivo para usuarios de Pago!</h1>Proximamente nuestros <b>usuarios de pago</b> tendran la oportunidad de elegir diferentes diseños para su CV (Hoja de Vida) enviarla por correo a empresas, imprimirla o guardarla donde quieras. En pulso laboral estamos trabajando por ofrecerte lo mejor, compra tu plan de pago y disfruta de muchos beneficios adicionales.</label>
																
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
																	<button type="button" class="btn blue">Ver Planes de Pago</button>
																	
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