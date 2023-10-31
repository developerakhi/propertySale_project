@extends('layouts.adminPartial.admin')

@section('admin_content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">All Post Ad</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">All Post Ad</li>
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
                              <h6>All Post Ad</h6>
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Additional Info</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col">Status</th>
                                    <th class="text-right">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   @foreach ($datas as $key=>$data)
                                  <tr>
                                    <td scope="row">{{$key+1}}</td>
                                    <td>
                                        @php
                                            $photos= json_decode($data->photo,true);
                                        @endphp
                                        <div class="row gutters-5 w-200px w-md-300px mw-100">
                                            <div class="col-auto">
                                                @if(is_iterable($photos))
                                                    @foreach($photos as $key => $photo)
                                                    
                                                    <img src="../public/files/ads/{{ $photo }}" alt="Image" class="size-50px img-fit" style="width:100px; height:60px;">
                                                  
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->phone}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->address}}</td>
                                    <td>{{$data->start_date}}</td>
                                    <td>{{$data->end_date}}</td>
                                    <td>{{$data->status}}</td>
                                    <td class="text-right footable-last-visible" style="display: table-cell;">
                                        <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{route('all_post_ad.show', $data->id)}}"  title="show">
                                            <i class="las la-eye"></i>
                                        </a>
                                        <a class="btn btn-soft-primary btn-icon btn-circle btn-sm edit" href="" title="Edit" data-id="{{$data->id}}" data-toggle="modal" data-target="#seditModal">
                                            <i class="las la-edit"></i>
                                         </a>
                                      
                                      <a href="{{route('AdQuery.destory' , $data->id)}}" class="btn btn-soft-danger btn-icon btn-circle btn-sm " title="Delete">
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
        </div>
    </div>
   {{-- Size Edit modal --}}
<div class="modal fade" id="seditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Status</h5>
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
    $.get("/postads/edit/"+id, function(data){
      $("#modal_body").html(data);
    });
  });
</script> 
@endsection