
<form action="{{route('updateType.update')}}" method="Post" id="add-form" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="type" >Location Type Name</label>
            <input type="hidden" class="form-control" id="id" name="id" value="{{$data->id}}">
            <input type="text" class="form-control" id="type" name="type" value="{{$data->type}}">
        </div>
        <div class="form-group">
            <label>Locations</label>
            <select name="location_id" class="form-control select2" data-placeholder="Select a Location Name" style="width: 100%;">
                @foreach ($locations as $location)
                <option value="{{$location->id}}" @if($data->location_id == $location->id) selected="" @endif>{{$location->location_name}}</option>
                @endforeach
            </select>
        </div>
        
    </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    <button type="Submit" class="btn btn-primary">Update</button>
  </div>
  </form>