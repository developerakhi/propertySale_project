
<form action="{{route('AdQuery.update')}}" method="Post" id="add-form" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="status" >Status</label>
            <input type="hidden" class="form-control" id="id" name="id" value="{{$data->id}}">
            <input type="text" class="form-control" id="status" name="status" value="{{$data->status}}">
        </div>
    </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    <button type="Submit" class="btn btn-primary">Update</button>
  </div>
  </form>