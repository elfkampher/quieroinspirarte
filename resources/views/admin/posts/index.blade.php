@extends('admin.layout')

@push('styles')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('header')
<div class="container-fluid">
	<div class="row mb-2">
	  
    <div class="col-sm-6">
	    <h1 class="m-0 text-dark">Todas las publicaciones</h1>      
	  </div><!-- /.col -->

	  <div class="col-sm-6">
	    <ol class="breadcrumb float-sm-right">
	      <li class="breadcrumb-item"><a href="#">Inicio</a></li>
	      <li class="breadcrumb-item active">Posts</li>
	    </ol>
	  </div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.container-fluid -->
@stop

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Listado de publicaciones</h3>
    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#postModal">
      <i class="fa fa-plus"></i> Crear publicación
    </button>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="posts-table" class="table table-bordered table-striped">
      <thead>
	      <tr>
	        <th>ID</th>
	        <th>Titulo</th>	        
	        <th>Extracto</th>
	        <th>Acciones</th>
	      </tr>
      </thead>

      <tbody>
      	@foreach($posts as $post)
      	<tr>
      		<td>{{ $post->id }}</td>
      		<td>{{ $post->title }}</td>
      		<td>{{ $post->excerpt }}</td>
      		<td>
            <form class="formDelete" method="post" action="{{ route('admin.posts.delete', $post->id) }}" id="eliminarPublicacion">
              @csrf
              {{ method_field('delete')}}
              <a href="{{ route('posts.show', $post) }}" class="btn btn-xs btn-default" target="_blank"><i class="fas fa-eye"></i></a>
        			<a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
        			<button class="btn btn-xs btn-danger eliminarPost">
                <i class="fas fa-times"></i>
              </button>
            </form>
      		</td>
      	</tr>
      	@endforeach
      </tbody>

      
    </table>
  </div>
  <!-- /.card-body -->
</div>

@stop

@push('scripts')
<!-- DataTables -->
<script src="{{ asset('assets/adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
  $(function () {    
    $('#posts-table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  $(document).on('click', ".eliminarPost", function(){
    event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
          title: "Estas seguro?",
          text: "Una vez borrada la publicación no podra recuperarse!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        }).then((willDelete)=>{
          if (willDelete) {
            $(".formDelete").submit();          // submitting the form when user press yes            
          } else {
            swal("Cancelado", "La publicación sigue vigente :)", "error");
          }
        });
  });
</script>

<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form method="POST" action="{{ url('admin/posts/store') }}">    
  @csrf
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agrega el titulo a tu nueva publicación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-group" >
            {{--<label for="title">Titulo de la publicación</label>--}}
            <input type="text" id="title" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') }}">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary">Crear publicación</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endpush