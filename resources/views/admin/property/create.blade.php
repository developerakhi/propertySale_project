@extends('layouts.adminPartial.admin')

@section('admin_content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Properties</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Properties</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <section class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class=row>
                            <div class="col-md-6 col-sm-4 col-lg-12">
                                <form role="form" action="{{route('property.store')}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <div class="row mb-4">
                                    <div class="col-4">
                                      <div class="form-outline">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select name="category_id" id="category_id" class="form-control select2" data-placeholder="Select a Category Name" style="width: 100%;" onchange="myFunction()">
                                              @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-outline">
                                          <div class="form-group">
                                              <label>Size</label>
                                              <select class="form-control select2" name="size_id" id="size_id" data-placeholder="Select a Size" style="width: 100%;">
                                                
                                              </select>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="form-outline">
                                          <div class="form-group">
                                              <label>Location</label>
                                              <select name="location_id" class="form-control select2" data-placeholder="Select a Location" style="width: 100%;">
                                                @foreach ($locations as $location)
                                                <option value="{{$location->id}}">{{$location->location_name}}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="form-outline">
                                          <div class="form-group">
                                              <label>Location Type</label>
                                              <select name="location_type_id" class="form-control select2" data-placeholder="Select a Location Type" style="width: 100%;">
                                                @foreach ($types as $type)
                                                <option value="{{$type->id}}">{{$type->type}}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="row mb-4">
                                    <div class="col">
                                      <div class="form-outline">
                                         <label class="form-label" for="size">Size</label>
                                         <input type="text" id="phone" name="size" class="form-control" value=""  placeholder="enter size"/>
                                      </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                           <label class="form-label" for="bed">Bed</label>
                                           <input type="text" id="bed" name="bed" class="form-control" value=""  placeholder="enter bed" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                           <label class="form-label" for="bath">Bath</label>
                                           <input type="text" id="bath" name="bath" class="form-control" value=""  placeholder="enter bath" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                           <label class="form-label" for="phone">Drawing</label>
                                           <input type="text" id="drawing" name="drawing" class="form-control" value=""  placeholder="enter drawing" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                           <label class="form-label" for="dining">Dining</label>
                                           <input type="text" id="dining" name="dining" class="form-control" value=""  placeholder="enter dining" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                           <label class="form-label" for="kitchen">Kitchen</label>
                                           <input type="text" id="kitchen" name="kitchen" class="form-control" value=""  placeholder="enter kitchen" />
                                        </div>
                                    </div>
                                    
                                  </div>
                                  
                                  <div class="row">
                                    <div class="col-4">
                                      <div class="form-outline">
                                         <label class="form-label" for="title">Title</label>
                                         <input type="text" name="title" id="title" class="form-control" value="" placeholder="title"/>
                                      </div>
                                    </div>
                                    <div class="col-4">
                                      <div class="form-outline">
                                        <label class="form-label" for="logo">Thumb Image</label>
                                        <input type="file" name="thumb_image" class="form-control" placeholder="upload logo" required accept="image/*"/>
                                        <img src="" alt="thumb_image"/>
                                        <input type="hidden" name="thumb_image" class="form-control" value="" placeholder="upload thumb_image"/> 
                                      </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-outline">  
                                          <table class="table table-bordered" id="dynamic_field">
                                          <div class="card-header">
                                            <h3 class="card-title" style="color:#7dc832;">Properties Images (Click Add For More Image)</h3>
                                          </div> 
                                            <tr>  
                                                <td><input type="file" accept="image/*" name="images[]" class="form-control name_list" /></td>  
                                                <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>  
                                            </tr>  
                                          </table>    
                                        </div>
                                      </div>
                                      
                                      <div class="col-4">
                                          <div class="form-outline">
                                            <label class="form-label" for="logo">Property Banner</label>
                                            <input type="file" name="property_banner" class="form-control" placeholder="upload logo" required accept="image/*"/>
                                            <img src="" alt="property_banner"/>
                                            <input type="hidden" name="property_banner" class="form-control" value="" placeholder="upload property_banner"/> 
                                          </div>
                                        </div>
                                  </div>
                                  <div class="row mb-4">
                                      <div class="col">
                                          <div class="form-outline">
                                             <label class="form-label" for="price">Price</label>
                                             <input type="text" name="price" id="price" class="form-control" value="" placeholder="enter price" />
                                          </div>
                                        </div>
                                    <div class="col">
                                      <div class="form-outline">
                                         <label class="form-label" for="vedio_links">Vedio Links</label>
                                         <input type="text" name="vedio_links" id="vedio_links" class="form-control" value="" placeholder="enter vedio links" />
                                      </div>
                                    </div>
                                  </div>
                                 
                                  <div class="row mb-4">
                                    <div class="col">
                                      <div class="form-outline">
                                         <label class="form-label" for="description">Description</label>
                                         <div class="card card-info card-outline">
                                          <div class="card-header">
                                            <h3 class="card-title">
                                             Propertice Description
                                            </h3>
                                            <!-- tools box -->
                                            <div class="card-tools">
                                              <button type="button" class="btn btn-tool btn-sm"
                                                      data-widget="collapse"
                                                      data-toggle="tooltip"
                                                      title="Collapse">
                                                <i class="fa fa-minus"></i>
                                              </button>
                                              <button type="button" class="btn btn-tool btn-sm"
                                                      data-widget="remove"
                                                      data-toggle="tooltip"
                                                      title="Remove">
                                                <i class="fa fa-times"></i>
                                              </button>
                                            </div>
                                            <!-- /. tools -->
                                          </div>
                                          <!-- /.card-header -->
                                          <div class="card-body">
                                            <div class="mb-3">
                                              <textarea type="text" id="description" name="description" class="form-control" value="" style="width: 100%">Please Text Here...</textarea>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col">
                                      <div class="form-outline">
                                         <label class="form-label" for="description">Facilities</label>
                                         <div class="card card-info card-outline">
                                          <div class="card-header">
                                            <h3 class="card-title">
                                             Propertice Facilities
                                            </h3>
                                            <!-- tools box -->
                                            <div class="card-tools">
                                              <button type="button" class="btn btn-tool btn-sm"
                                                      data-widget="collapse"
                                                      data-toggle="tooltip"
                                                      title="Collapse">
                                                <i class="fa fa-minus"></i>
                                              </button>
                                              <button type="button" class="btn btn-tool btn-sm"
                                                      data-widget="remove"
                                                      data-toggle="tooltip"
                                                      title="Remove">
                                                <i class="fa fa-times"></i>
                                              </button>
                                            </div>
                                            <!-- /. tools -->
                                          </div>
                                          <!-- /.card-header -->
                                          <div class="card-body">
                                            <div class="mb-3">
                                              <textarea type="text" id="facilities" name="facilities" class="form-control" value="" style="width: 100%">Please Text Here...</textarea>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                    
                                  </div>
                                
                                  <!-- Submit button -->
                                  <button type="submit" class="btn btn-primary btn-block mb-4">submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  function myFunction() {
    var id = $('#category_id').val();
    $.ajax({
           url: "{{ url("/get-child-category/") }}/"+id,
           type: 'get',
           success: function(data) {
                $('select[name="size_id"]').empty();
                   $.each(data, function(key,data){
                      $('select[name="size_id"]').append('<option value="'+ data.id +'">'+ data.size +'</option>');
                });
           }
        });
  }

  $(document).ready(function(){      
       var postURL = "<?php echo url('addmore'); ?>";
       var i=1;  
       $('#add').click(function(){  
            i++;  
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="file" accept="image/*" name="images[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
       });  
       $(document).on('click', '.btn_remove', function(){  
            var button_id = $(this).attr("id");   
            $('#row'+button_id+'').remove();  
       });  
     }); 
</script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('#description'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })

    // bootstrap WYSIHTML5 - text editor

    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    })
  })
</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('#facilities'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })

    // bootstrap WYSIHTML5 - text editor

    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    })
  })
</script>

@endsection