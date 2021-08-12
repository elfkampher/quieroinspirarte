@extends('admin.layout')

@push('styles')
<!-- daterange picker -->
<link rel="stylesheet" href="{{ asset('assets/adminlte/plugins/daterangepicker/daterangepicker.css') }}">
<!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/adminlte/plugins/summernote/summernote-bs4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/adminlte/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/basic.css">
@endpush

@section('header')
<div class="container-fluid">
	<div class="row mb-2">
	  <div class="col-sm-6">
	    <h3 class="m-0 text-dark">Crear Publicación</h3>
	  </div><!-- /.col -->
	  <div class="col-sm-6">
	    <ol class="breadcrumb float-sm-right">
	      <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
	      <li class="breadcrumb-item"><a href="{{ url('admin/post/index') }}">Posts</a></li>
	      <li class="breadcrumb-item active">Crear</li>
	    </ol>
	  </div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.container-fluid -->
@stop

@section('content')
	

@php
	$errores = "";
@endphp		
<div class="row">
	<div class="col-md-8">
		<div class="card card-primary">
		  <div class="card-header">
		    <h3 class="card-title">Edición de Post</h3>
		  </div>
		  <!-- /.card-header -->
		  <!-- form start -->
		  <form method="POST" action="{{ route('admin.posts.update', $post) }}">		
		  	@csrf
		  	{{ method_field('PUT') }}
		    <div class="card-body">
		    
			  	<div class="form-group" >
			    	<label for="title">Titulo de la publicación</label>
			    	<input type="text" id="title" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title', $post->title) }}">
			  	</div>				  	
			  	
			  	<label>Contenido publicación</label>
			  	<div class="form-group">
			    	<textarea class="input-block-level {{ $errors->has('body') ? 'is-invalid' : '' }}" id="body" name="body" rows="10">{{ old('body', $post->body) }}</textarea>
			    	{!! $errors->first('body', '<span class="error invalid-feedback">:message</span>') !!}
			  	</div>

			  	<div class="form-group {{ $errors->has('iframe') ? 'is-invalid' : '' }}">
			  		<label>Contenido embebido (iframe)</label>
			  		<textarea rows="2" name="iframe" class="form-control" placeholder="Ingresa contenido embebido (iframe) de audio o video">{{ old('iframe', $post->iframe) }}</textarea>
			  	</div>	

					<div class="row">
			  		@foreach($post->photos as $photo)			  			
				  		<div class="col-md-2">
				  			<a photo_id="{{ $photo->id }}" class="btn btn-danger btn-xs deletephoto" style="position: absolute">
				  				<i class="fas fa-times"></i>
				  			</a>
				  			<img class="img-thumbnail" src="{{ url($photo->url) }}">
				  		</div>				  		
				  	@endforeach
			  	</div>

		    </div>
		    <!-- /.card-body -->		    
		  
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-primary">
		  <div class="card-header">
		    <h3 class="card-title"></h3>
		  </div>
		  <!-- /.card-header -->
		  <div class="card-body">

		  	<div class="form-group">
				    	<label for="excerpt" >Extracto de la publicación</label>
				    	<textarea id="excerpt" name="excerpt" class="form-control {{ $errors->has('excerpt') ? 'is-invalid' : '' }}" rows="2">{{ old('excerpt', $post->excerpt) }}</textarea>
				    	{!! $errors->first('excerpt', '<span class="error invalid-feedback">:message</span>') !!}
				  </div>		  	

			  	<div class="form-group">	                	
	          	<label>Date:</label>
	            
	        	<input type="text" class="form-control" name="published_at" id="published_at" value="{{ old('published_at', $post->published_at ? $post->published_at->format('m/d/Y'): null ) }}" />	            
	        </div>

	        <div class="form-group">
	        	<label>Categorias</label>
	        	<select class="form-control select2 {{ $errors->has('category_id') ? 'is-invalid' : '' }}" name="category_id" id="category_id">
	        		<option value="">Selecciona una categoria</option>
	        		@foreach($categories as $category)
	        		<option value="{{ $category->id }}"
	        			{{ old('category_id', $post->category_id) == $category->id ? 'selected': "" }}
	        		>{{ $category->name }}</option>
	        		@endforeach
	        	</select>
	        	{!! $errors->first('category_id', '<span class="error invalid-feedback">:message</span>') !!}
	        </div>

	        <div class="form-group" >
	        	<label>Etiquetas</label>
	        	<select class="select2 form-control {{ $errors->has('tags') ? 'is-invalid' : '' }}" 
	        	multiple="multiple" id="tags[]" name="tags[]" data-placeholder="Seleccione Etiquetas">
	        		@foreach($tags as $tag)
	        		<option value="{{ $tag->id }}"
	        			{{ collect(old('tags', $post->tags->pluck('id')))->contains($tag->id) ? 'selected' : '' }}
	        		>{{ $tag->name }}</option>
	        		@endforeach
	        	</select>
	        </div>

	        <div class="form-group">
			  		<div class="dropzone"></div>
			  	</div>

	        <div class="form-group">
	        	<button type="submit" class="btn btn-primary btn-block">Guardar Publicación</button>
	        </div>

	        </form>
		  </div>
		  <!-- /.card-body -->
		</div>
	</div>
</div>

@stop

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
<!-- InputMask -->
<script src="{{ asset('assets/adminlte/plugins/moment/moment.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('assets/adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('assets/adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('assets/adminlte/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
//Date range picker
$(function() {
  $('input[name="published_at"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    autoUpdateInput: true
    
  });

  $('#body').summernote()

  $('.select2').select2({
  	tags: true
  })
});

var myDropzone = new Dropzone('.dropzone',{
   url: '/admin/posts/{{ $post->url }}/photos',
   acceptedFiles: 'image/*',
   paramName: 'photo',
   maxFileSize: 2,
   maxFiles: 6,
   headers: {
      'X-CSRF-TOKEN': '{{ csrf_token() }}'
   },
   
   dictDefaultMessage: 'Arrastra las fotos aquí para subirlas'
});
 
Dropzone.autoDiscover = false;
 
myDropzone.on('error', function(file, res) {
   var msg = res.errors.photo[0];
   $('.dz-error-message:last > span').text(msg);
}); 

Dropzone.autoDiscover = false;

$(document).on('click', '.deletephoto', function(){
	var photo_id = $(this).attr('photo_id');

	$.ajax({
		url: "{{ url('admin/photos/deletephoto') }}",
		type: "post",		
		data:{			
			_token: '{{ csrf_token() }}',
			id: photo_id
		},
		success: function(){
			swal(
				"Listo!", 
				"La foto ha sido borrada", 
				"warning"
			).then(function(){
				location.reload();
			});			
		}
	});
});

</script>
@endpush
