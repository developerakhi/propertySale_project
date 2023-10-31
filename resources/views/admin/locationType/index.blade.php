@extends('layouts.adminPartial.admin')

@section('admin_content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Location Type</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Location Type</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <div class=row>
                            <div class="col-md-6 col-sm-4 col-lg-12">
                              <h6>All Location Type</h6>
                              <table class="table" id="example1">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Locations Name</th>
                                    <th scope="col">Location Type Name</th>
                                    <th class="text-right">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($data as $key=>$items)
                                  <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$items->location->location_name}}</td>
                                    <td>{{$items->type}}</td>
                                    <td class="text-right footable-last-visible" style="display: table-cell;">
                                         
                                      <a class="btn btn-soft-primary btn-icon btn-circle btn-sm edit" href="" title="Edit" data-id="{{$items->id}}" data-toggle="modal" data-target="#seditModal">
                                        <i class="las la-edit"></i>
                                      </a>
                                      <a href="{{route('destoryType.destory',$items->id)}}" class="btn btn-soft-danger btn-icon btn-circle btn-sm " title="Delete">
                                        <i class="las la-trash"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-5">
              <div class="card">
                  <div class="card-body">
                      <div class=row>
                          <div class="col-md-6 col-sm-4 col-lg-12">
                              <form role="form" action="{{route('storeType.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                              <div class="row mb-4">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Locations</label>
                                        <select name="location_id" class="form-control select2" data-placeholder="Select a Location Name" style="width: 100%;">
                                           
                                            @foreach ($locations as $location)
                                            <option value="{{$location->id}}">{{$location->location_name}}</option>
                                            @endforeach
                                           
                                        </select>
                                      </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                      <div class="form-outline">
                                        <label for="type">Create Location Type</label>
                                        <input type="text" name="type" id="type" class="form-control" value="" required placeholder="location type name" />
                                      </div>
                                    </div>
                                </div>
                              
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>

    {{-- Category Edit modal --}}
<div class="modal fade" id="seditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit t</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div id="modal_body">
        
        </div>
    </div>
  </div>
</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
  $('body').on('click','.edit', function(){
    let id=$(this).data('id');
    $.get("/location/editType/"+id, function(data){
      $("#modal_body").html(data);
    });
  });
</script> 
@endsection