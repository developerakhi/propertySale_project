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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="h2 fs-16 mb-0">Post Ads Details</h1>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col text-center">
                                <h3>Post Ads Info</h3>
                                <p><b>Name: </b>{{$data->name}}</p>
                                <p><b>Phone: </b>{{$data->phone}}</p>
                                <p><b>Email: </b>{{$data->email}}</p>
                            </div>
                         </div>
                         <div class="row mb-4">
                            <div class="col text-left">
                                <p><b>Product Title: </b>{{$data->title}}</p>
                                <p><b>Start Date: </b>{{$data->start_date}}</p>
                                <p><b>End Date: </b>{{$data->end_date}}</p>
                            </div>
                         </div>
                         <div class="row mb-4">
                            @php
                                $photos= json_decode($data->photo,true);
                            @endphp
                            <div class="row gutters-5 w-200px w-md-300px mw-100">
                                <div class="col-auto">
                                    @foreach($photos as $key => $photo)
                                    
                                    <img src="../../public/files/ads/{{ $photo }}" alt="Image" class="size-50px img-fit text-center" style="width:300px; height:300px;">
                                  
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>

</section>

@endsection