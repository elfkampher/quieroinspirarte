
<div class="modal fade" id="postModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="{{ route('admin.posts.store', '#create') }}">
      @csrf
      <div class="modal-header">
        <h4 class="modal-title">Agrega el titulo a la nueva publicación</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group" >
          {{--<label for="title">Titulo de la publicación</label>--}}
          <input type="text" id="title" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') }}">
          @error('title')
            <p class="alert alert-danger">Es necesario ingresar el titulo</p>
          @enderror
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
