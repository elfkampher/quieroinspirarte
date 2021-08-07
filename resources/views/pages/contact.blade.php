@extends('layoutct')
@include('partials.header')
@section('content')
<div class="main main-raised">
    <div class="profile-content">
    	<div class="container">	
			<div class="section section-contacts">
    			<div class="row">
					<div class="col-md-8 ml-auto mr-auto">
						<h2 class="text-center title">Contactanos</h2>
						<h4 class="text-center description">Si tienes dudas, sugerencias, comentarios, aportes felicitaciones o simplemente necesitas hablar con alguien dejanos un correo y te contestaremos a la brevedad posible.</h4>
						<form class="contact-form">
						  <div class="row">
						    <div class="col-md-6">
						      <div class="form-group">
						        <label class="bmd-label-floating">Tu Nombre</label>
						        <input type="email" class="form-control">
						      </div>
						    </div>
						    <div class="col-md-6">
						      <div class="form-group">
						        <label class="bmd-label-floating">Tu Correo</label>
						        <input type="email" class="form-control">
						      </div>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="exampleMessage" class="bmd-label-floating">Tu Mensaje</label>
						    <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
						  </div>
						  <div class="row">
						    <div class="col-md-4 ml-auto mr-auto text-center">
						      <button class="btn btn-primary btn-raised">
						        Enviar Mensaje
						      </button>
						    </div>
						  </div>
						</form>
					</div>
    			</div>
  			</div>
  		</div>
  	</div>
  </div>
@endsection
