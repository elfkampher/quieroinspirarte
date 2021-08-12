@extends('layoutct')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/profile_city.jpg')">
	<div class="container">
	  <div class="row">
	    <div class="col-md-6">
	      <div class="row mb-2">
		      <div class="col-sm-6">
		        <h1>Error 404</h1>
		      </div>
		      <div class="col-sm-6">
		        <ol class="breadcrumb float-sm-right">
		          <li class="breadcrumb-item"><a href="{{ route('pages.home') }}">Home</a></li>
		          <li class="breadcrumb-item active">404 Pagina No Encontrada</li>
		        </ol>
		      </div>
		    </div>
	      <br>	          
	    </div>
	  </div>
	</div>
</div>
@section('content')
<div class="main main-raised">
	<div class="profile-content">
		<div class="row">
			<div class="col-md-6 ml-auto mr-auto">
				<div class="profile">
					
					<!-- Main content -->
					<section class="content">
					  <div class="error-page">
					    <h2 class="headline text-warning"> 404</h2>

					    <div class="error-content">
					      <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Pagina No Encontrada.</h3>

					      <p>
					        No hemos podido localizar el contendido que estas buscando.
					        Mientras tanto, Podrias regresar a nuestro <a href="{{ route('pages.home') }}">blog</a> e intentar buscar el contenido desde ahi.
					      </p>
					      
					    </div>
					    <!-- /.error-content -->
					  </div>
					</section>	  <!-- /.error-page -->	
				</div>				
			</div>
		</div>
	</div>
</div>


@endsection

