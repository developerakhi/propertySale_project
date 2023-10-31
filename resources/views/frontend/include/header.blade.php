<!-- Bootstrap Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-white">
    <div class="container">
      <!-- Logo on the left -->
    <a class="navbar-brand" href="{{url('/')}}">
      <img src="{{url($setting->logo)}}" class="logo" height="50" alt="logo">
    </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu on the right -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('home.search')}}">ALL PLOT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">BLOG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-success text-white" href="#" data-toggle="modal" data-target="#modalCart" id="multistepFormForBuy">POST YOUR AD</a>
            </li>
            <!--<li class="nav-item">-->
            <!--  <a class="nav-link" href="#">SIGN <i class="fa fa-user-circle" aria-hidden="true"></i></a>-->
            <!--</li>-->
        </ul>
    </div>
  </div>
</nav>
<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="col-md-12">
            <h4 class="modal-title text-center" id="myModalLabel">Post Your AD Request</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
             <p class="text-center">
                Please provide all the necessary information below for a more efficient and effective service.
             </p>
        </div>
      </div>
      <div class="">
        <div class="modal_forms" style="text-align:left; margin:20px;">
            <form action="{{route('ads.query.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="md-form mb-2">
                  <label data-success="right" style="font-weight:bold;">Titel <span>*</span></label>
                  <input class="form-control" type="text" name="title" placeholder="Enter Title" required>
                </div>
                <div class="md-form mb-2">
                  <label data-success="right" style="font-weight:bold;">Name <span>*</span></label>
                  <input class="form-control" type="text" name="name" placeholder="Enter Name" required>
                </div>
                <div class="md-form mb-2">
                  <label data-success="right" style="font-weight:bold;">Contact Number <span>*</span></label>
                  <input class="form-control" type="number" name="phone" placeholder="Enter Contact Number" required>
                </div>
                <div class="md-form mb-2">
                  <label  data-success="right" style="font-weight:bold;">Email (Optional)</label>
                  <input class="form-control" type="email" name="email" placeholder="Enter Email">
                </div>
                <div class="md-form mb-2">
                  <label data-success="right" style="font-weight:bold;">Additional Info</label>
                  <textarea type="text" class="form-control" name="address" placeholder="Example: Budget,Sqft,Bed etc "></textarea>
                </div>
                <div class="md-form mb-2"> 
                  <table class="table table-bordered" id="dynamic_field">
                  <div class="card-header">
                    <h3 class="" style="color:#7dc832; font-size: 16px;">Property Images (Click Add For More Image)</h3>
                  </div> 
                    <tr>  
                        <td><input type="file" accept="photo/*" name="photos[]" class="form-control name_list" /></td>  
                        <td><button type="button" name="add" id="add" class="btn btn-success" style="padding: 5px;">Add</button></td>  
                    </tr>  
                  </table> 
                  </div>
                <div class="md-form mb-2">
                  <label data-success="right" style="font-weight:bold;">Start Date</label>
                  <input class="form-control" type="datetime-local" name="start_date" placeholder="Enter start date">
                </div>
                <div class="md-form mb-2">
                  <label data-success="right" style="font-weight:bold;">End Date</label>
                  <input class="form-control" type="datetime-local" name="end_date" placeholder="Enter end date">
                </div>
                <div class="md-form mb-2">
                  <label data-success="right" style="font-weight:bold;">Description</label>
                  <textarea type="text" class="form-control" name="description" cols="5" rows="5" placeholder="Tex Here..."></textarea>
                </div>
                <span class="alart__text">*Marked fields are mendatory</span><br><br>
              <div class="md-form mb-2">
                  <button type="submit" class="form__btn " style="width: 100%;" id="submitMultistepForm2">Submit</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function(){      
       var postURL = "<?php echo url('addmore'); ?>";
       var i=1;  
       $('#add').click(function(){  
            i++;  
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="file" accept="image/*" name="images[]" class="form-control name_list" /></td><td><button type="button" style="padding: 5px 15px;" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
       });  
       $(document).on('click', '.btn_remove', function(){  
            var button_id = $(this).attr("id");   
            $('#row'+button_id+'').remove();  
       });  
     }); 
</script>