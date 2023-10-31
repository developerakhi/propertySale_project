@extends('layouts.adminPartial.admin')

@section('admin_content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Size</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Size</li>
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
                              <h6>All Property</h6>
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Location Type Name</th>
                                    <th scope="col">Price</th>
                                    <th class="text-right">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   @foreach ($datas as $key=>$data)
                                  <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td><img src="{{url($data->thumb_image)}}"  style="width:100px; height:60px;"></td>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->location->location_name}}</td>
                                    <td>{{$data->category->category_name}}</td>
                                    <td>{{$data->size}}</td>
                                    <td>@if($data->location_type_id !=null){{$data->locationType->type}}@endif</td>
                                    <td>{{$data->price}}</td>
                                    <td class="text-right footable-last-visible" style="display: table-cell;">
                                      <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{route('property.edit', $data->id)}}" title="Edit" data-id="">
                                        <i class="las la-edit"></i>
                                      </a>
                                      <a href="{{route('property.destory', $data->id)}}" class="btn btn-soft-danger btn-icon btn-circle btn-sm " title="Delete">
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

</section>
 
@endsection