<!-- Modal -->

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" enctype="multipart/form-data" id="update">
          <input type="hidden" name="id" value="{{$brands->id}}">
      {{csrf_field()}}
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{$brands->name}}">
      </div>

      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" value="" id="image">
        @if($brands->getImage())
        <img src="{{$brands->getImage()->smallUrl}}" alt="Image">
        @endif
      </div>

      <div class="form-group">
        <label for="company_name">Company Name</label>
        <input type="text" name="company_name" class="form-control" value="{{$brands->company_name}}">
      </div>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary btn-update">Save changes</button>
      </div>
    </div>
  </div>
