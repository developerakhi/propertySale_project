@extends('layouts.frontendPartial.frontend')

@section('content')
@include('frontend.include.banner')

<section class="listing-wrap ptb-100">
    <div class="container">
        <div class="row gx-5">
            <div class="col-12">
                <div class="search-input-container">
                    <ul>
                        @if($category_name!=null)
                        <li>{{$category_name->category_name}} <i class="fa-solid fa-xmark remove-filter" data="property_type"></i></li>@endif     
                        @if($location_name!=null)                          
                        <li> {{$location_name->location_name}} <i class="fa-solid fa-xmark remove-filter" data="area"></i></li> @endif      
                        @if($size_name!=null)               
                        <li>{{$size_name->size}}<i class="fa-solid fa-xmark remove-filter" data="size"></i></li>@endif
                    </ul>
                </div>
            </div>
          

            <div class="col-xl-9">
                <div class="row">
                    @forelse ($datas as $data)                                                          
                    <div class="col-lg-4 col-md-6">
                        <a href="{{route('home.details', $data->id)}}">
                            <div class="property-card style2">
                                <div class="">
                                    <div class="">                                                              
                                        <div class="" style="">
                                            <div class="" style="">
                                                <div class="" style="">
                                                    <img class="img-fit" src="{{url($data->thumb_image)}}" alt="শম্পা প্রোপার্টিজ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="company-logo">-->
                                    <!--    <img src="">-->
                                    <!--</div>-->
                                </div>
                                <div class="property-info">
                                    <div class="property-status-wrap">
                                        <span class="property-status">
                                            {{$data->category->category_name}}
                                        </span>
                                    </div>
                                    <h3 class="garage-title">                                                    
                                        {{$data->title}}
                                    </h3>
                                    <p>
                                        <img src="images/location.png" width="16" height="16">{{$data->location->location_name}}
                                    </p>
                                    <ul class="property-metainfo list-style">
                                        <li><i class="fa fa-ruler"></i> {{$data->size}}</li>
                                    </ul>                                                   
                                </div>
                            </div>
                        </a>
                    </div> 
                    @empty
                    <div class="col-xl-9">
                        <div class="row">
                            <p class="no-search-result col-md-12 col-md-6">দুঃখিত। আপনি @if($location_name!=null) {{$location_name->location_name}}@endif-এ  @if($size_name!=null) {{$size_name->size}} @endif @if($category_name!=null){{$category_name->category_name}}  @endif খুঁজছেন, তা পাওয়া যায়নি।  </p>
                            <div class="text-center custom-pagination">
                                
                            </div>
                        </div>
                    </div>
                    @endforelse                     
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-6 col-md-3">
                <div class="row">
                    
                    <div class="accordion" id="accordionExample" role="tablist" aria-multiselectable="false">
                        <form action="{{route('home.search')}}" class="search-form-left-filter" method="GET" id="sort_products">
                            <div class="accordion-item col">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>
                                            <i class="fa fa-plus plus"></i>
                                            <i class="fa fa-minus minus"></i>
                                        </span>
                                       কী খুঁজছেন?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="single-product-text">
                                               @foreach ($categories as $category)
                                                <div class="area" onchange="search_property()" >
                                                    <input class="filter-value" type="radio" id="{{$category->category_name}}" required="true" name="category_id" value="{{$category->id}}" @if($category_name!=null && $category_name->id == $category->id) checked @endif>
                                                    <span class="radiobtn"></span>
                                                    <label for="{{$category->category_name}}">{{$category->category_name}}</label>
                                                </div>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item col">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                        <span>
                                            <i class="fa fa-plus plus"></i>
                                            <i class="fa fa-minus minus"></i>
                                        </span>
                                       কোথায় ?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="single-product-text">
                                            @foreach ($locations as $location)
                                                <div class="area-container" onchange="search_property()">
                                                    <input class="filter-value" type="radio"  name="location_id" id="{{$location->location_name}}" value="{{$location->id}}" @if($location_name!=null && $location_name->id == $location->id) checked @endif>
                                                    <label for="{{$location->location_name}}" class="garage-title-location">{{$location->location_name}}</label>
                                                </div>
                                                @endforeach
                                         </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item col">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                        <span>
                                            <i class="fa fa-plus plus"></i>
                                            <i class="fa fa-minus minus"></i>
                                        </span>
                                       আকার
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="single-product-text">
                                           @foreach ($sizes as $size)
                                            <div class="area" onchange="search_property()">
                                                <input class="filter-value" type="radio" id="{{$size->size}}" name="size_id" value="{{$size->id}}" @if($size_name!=null && $size_name->id == $size->id) checked @endif>
                                                <span class="radiobtn"></span>
                                                <label for="{{$size->size}}">{{$size->size}}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    function search_property(el){
            $('#sort_products').submit();
        }
</script>
@endsection