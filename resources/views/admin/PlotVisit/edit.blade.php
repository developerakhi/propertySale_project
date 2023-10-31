@extends('layouts.adminPartial.admin')

@section('admin_content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Plot Visit Schedule</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Plot Visit Schedule</li>
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
                                <form role="form" action="{{route('plotvisit.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                 
                                  <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                           <label class="form-label" for="name">Name</label>
                                           <input type="text" id="name" name="name" class="form-control" value="{{$data->name}}"  placeholder="enter name" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                           <label class="form-label" for="email">Email</label>
                                           <input type="email" id="email" name="email" class="form-control" value="{{$data->email}}"  placeholder="enter email" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                           <label class="form-label" for="phone">Phone</label>
                                           <input type="text" id="phone" name="phone" class="form-control" value="{{$data->phone}}"  placeholder="enter phone" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                           <label class="form-label" for="start_date">Date</label>
                                           <input type="date" id="start_date" name="start_date" class="form-control" value="{{$data->start_date}}"  placeholder="enter start date" />
                                        </div>
                                    <!--</div>-->
                                    <!--<div class="col">-->
                                    <!--    <div class="form-outline">-->
                                    <!--       <label class="form-label" for="end_date">End Date</label>-->
                                    <!--       <input type="date" id="end_date" name="end_date" class="form-control" value="{{$data->end_date}}"  placeholder="enter end date" />-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    
                                  </div>
                                  
                                  <div class="row">
                                        <div class="col-4">
                                          <div class="form-outline">
                                             <label class="form-label" for="title">Time</label>
                                             <input type="text" name="time" id="time" class="form-control" value="{{$data->time}}" placeholder="time"/>
                                          </div>
                                        </div>
                                        <div class="col-4">
                                          <div class="form-outline">
                                             <label class="form-label" for="notes">Notes</label>
                                             <input type="text" name="notes" id="notes" class="form-control" value="{{$data->notes}}" placeholder="notes"/>
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
  });
  
  //update multiple image js
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

 
  //edit product imahe remove by cros btn
         $('.remove-files').on('click', function(){
              $(this).parents(".col-md-4").remove();
          });


</script>

@endsection