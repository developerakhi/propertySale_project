
<form action="{{route('size.update')}}" method="Post" id="add-form" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="size" >Size</label>
            <input type="hidden" class="form-control" id="id" name="id" value="{{$data->id}}">
            <input type="text" class="form-control" id="size" name="size" value="{{$data->size}}">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control select2" data-placeholder="Select a Category Name" style="width: 100%;">
                @foreach ($categories as $category)
                <option value="{{$category->id}}" @if($data->category_id == $category->id) selected="" @endif>{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        
    </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    <button type="Submit" class="btn btn-primary">Update</button>
  </div>
  </form>