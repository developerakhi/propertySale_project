@extends('layouts.adminPartial.admin')

@section('admin_content')

<link rel="stylesheet" href="{{asset('backend/tags/style.css')}}">
{{-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css"> --}}

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Business Settings</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Settings</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  {{-- <div class="container-fluid">
    <div class="card">
        <div class="card-body">
        
          
        </div>
      </div>
  </div> --}}


  <section class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class=row>
                            <div class="col-md-6 col-sm-4 col-lg-12">
                                <form role="form" action="{{route('business.update')}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <div class="row mb-4">
                                    <div class="col">
                                      <div class="form-outline">
                                         <label class="form-label" for="website_name">Website Name</label>
                                         <input type="text" name="website_name" id="website_name" class="form-control" value="{{$data->website_name}}" placeholder="website name"/>
                                      </div>
                                    </div>
                                    <div class="col">
                                      <div class="form-outline">
                                        <label class="form-label" for="logo">Logo</label>
                                        <input type="file" name="logo" class="form-control" placeholder="upload logo"/>
                                        <img src="{{url($data->logo)}}" alt="logo"/>
                                        <input type="hidden" name="old_logo" class="form-control" value="{{$data->logo}}" placeholder="upload logo"/> 
                                      </div>
                                    </div>
                                  </div>
                                
                                 <div class="row mb-4">
                                    <div class="col">
                                      <div class="form-outline">
                                         <label class="form-label" for="email">Email</label>
                                         <input type="email" name="email" id="email" class="form-control" value="{{$data->email}}" placeholder="enter email" />
                                      </div>
                                    </div>
                                    <div class="col">
                                      <div class="form-outline">
                                         <label class="form-label" for="phone">Phone</label>
                                         <input type="number" id="phone" name="phone" class="form-control" value="{{$data->phone}}"  placeholder="enter phone number" />
                                      </div>
                                    </div>
                                  </div>
                                
                                <div class="row mb-4">
                                    <div class="col">
                                      <div class="form-outline">
                                         <label class="form-label" for="meta">Meta Title</label>
                                         <input type="text" id="meta" name="meta" class="form-control" value="{{$data->meta}}"  placeholder="enter your meta"/>
                                      </div>
                                    </div>
                                    <div class="col">
                                      <div class="form-outline">
                                         <label class="form-label" for="meta_description">Meta Description</label>
                                         <input type="text" id="meta_description" name="meta_description" class="form-control" value="{{$data->meta_description}}"  placeholder="enter your meta"/>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="row mb-4">
                                    <div class="col">
                                      <div class="form-outline">
                                         <label class="form-label" for="favicon">Favicon Icon</label>
                                         <input type="file" name="favicon" id="favicon" class="form-control" placeholder="upload favicon icon" />
                                         <img src="{{url($data->favicon)}}" alt="logo"/>
                                         <input type="hidden" name="old_favicon" id="favicon" class="form-control" value="{{$data->favicon}}"  placeholder="upload favicon icon" />
                                      </div>
                                    </div>
                                    <div class="col">
                                      <div class="form-outline">
                                        <label class="form-label" for="address">Address</label>
                                        <input type="text" name="address" id="address" class="form-control" value="{{$data->address}}"  placeholder="enter your address" />
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="row mb-4">
                                  <div class="col">
                                      <label class="form-label" for="tag">Tags</label>
                                      <div class="tag-area">
                                        <label for="business_tag" class="label">Add Tags</label>
                                        <ul>
                                            <input type="text" class="tag-input" name="business_tag" id="tag-input" value="{{$data->business_tag}}"  />
                                        </ul>
                                    </div>
                                    <script src="./main.js"></script>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                       <label class="form-label" for="meta_image">Meta Image</label>
                                       <input type="file" name="meta_image" id="meta_image" class="form-control"  placeholder="upload meta image" />
                                       <img src="{{url($data->meta_image)}}"  style="width:160px; height:60px;">
                                       <input type="hidden" name="old_meta_image" id="meta_image" class="form-control" value="{{$data->meta_image}}"  placeholder="upload meta image" />
                                    </div>
                                  </div>
                                </div>
                                <div class="row mb-4">
                                  <div class="col">
                                    <div class="form-outline">
                                      <label for="currency">Curency</label>
                                      <select class="form-control" name="currency">
                                        <option value="৳" {{($data->currency=='৳') ? 'selected' : ''}}>BDT</option>
                                        <option value="$" {{($data->currency=='$') ? 'selected' : ''}}>USD</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                       <label class="form-label" for="facbook_links">Facebook Links</label>
                                       <input type="text" name="facbook_links" id="facbook_links" class="form-control" value="{{$data->facbook_links}}"  placeholder="write facebook links" />
                                    </div>
                                  </div>
                                </div>

                                <div class="row mb-4">
                                  <div class="col">
                                    <div class="form-outline">
                                      <label class="form-label" for="instagram_links">Instagram Links</label>
                                       <input type="text" name="instagram_links" id="instagram_links" class="form-control" value="{{$data->instagram_links}}"  placeholder="write instagram links" />
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                      <label class="form-label" for="linkedin_links">Linkedin Links</label>
                                       <input type="text" name="linkedin_links" id="linkedin_links" class="form-control" value="{{$data->linkedin_links}}"  placeholder="write linkedin links" />
                                    </div>
                                  </div>
                                </div>

                                <div class="row mb-4">
                                  <div class="col">
                                    <div class="form-outline">
                                      <label class="form-label" for="twitter_links">Twitter Links</label>
                                       <input type="text" name="twitter_links" id="twitter_links" class="form-control" value="{{$data->twitter_links}}"  placeholder="write twitter links" />
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                      <label class="form-label" for="youtube_links">Youtube Links</label>
                                       <input type="text" name="youtube_links" id="youtube_links" class="form-control" value="{{$data->youtube_links}}"  placeholder="write youtube links" />
                                    </div>
                                  </div>
                                </div>
                                
                                  <!-- Submit button -->
                                  <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
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
<script src="{{asset('backend/tags/script.js')}}"></script>

@endsection