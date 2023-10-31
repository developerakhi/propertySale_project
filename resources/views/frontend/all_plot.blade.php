@extends('layouts.frontendPartial.frontend')

@section('content')

<section class="listing-wrap ptb-100">
    <div class="container">
        <div class="row gx-5">
            <div class="col-12">
                <div class="search-input-container">
                    <ul>
                        <li>ফ্ল্যাট <i class="fa-solid fa-xmark remove-filter" data="property_type"></i></li>                               
                        <li> জ্বলেশ্বরীতলা <i class="fa-solid fa-xmark remove-filter" data="area"></i></li>                      
                        <li>১২০০ বর্গফুটের নিচে <i class="fa-solid fa-xmark remove-filter" data="size"></i></li>
                    </ul>
                </div>
            </div>
            
            <div class="col-xl-9">
                <div class="row"> 
                    @foreach ($datas as $data)                                                          
                    <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <a href="{{route('home.details', $data->id)}}">
                            <div class="property-card style2">
                                <div class="search-product-image">
                                    <div class="property-img-slider owl-carousel owl-loaded owl-drag">                                                              
                                        <div class="owl-stage-outer owl-height">
                                            <div class="owl-stage" style="transition: all 0s ease 0s; width: 1620px;">
                                                <div class="owl-item cloned" style="width: 304px; margin-right: 20px;">
                                                    <img class="img-fit" src="{{url($data->thumb_image)}}" alt="শম্পা প্রোপার্টিজ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="company-logo">
                                        <img src="">
                                    </div>
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
                                        <img class="img-fit" src="images/location.png" width="16" height="16">{{$data->location->location_name}}
                                    </p>
                                    <ul class="property-metainfo list-style">
                                        <li><i class="fa fa-ruler"></i> {{$data->size}}</li>
                                    </ul>                                                   
                                </div>
                            </div>
                        </a>
                    </div> 
                    @endforeach                     
                </div>
            </div>

            <div class="col-xl-3">
                <div class="row">
                    <div class="accordion" id="accordionExample" role="tablist" aria-multiselectable="false">

                        <form action="https://www.abashonmela.pro/search" class="search-form-left-filter">

                            <div class="accordion-item">
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
                                                <div class="area">
                                                    <input class="filter-value" checked="" type="radio" id="category_name" name="category_name" value="{{$category->id}}">
                                                    <span class="radiobtn"></span>
                                                    <label for="flat_type">{{$category->category_name}}</label>
                                                </div>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
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
                                                <div class="area-container">
                                                    <input class="filter-value" type="radio" id="location_name" name="location_name" value="{{$location->id}}">
                                                    <label for="কুমিল্লা_district" class="garage-title-location">{{$location->location_name}}</label>
                                                </div>
                                                @endforeach
                                         </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
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
                                            <div class="area">
                                                <input class="filter-value" checked="" type="radio" id="0-1199_size" name="size" value="0-1199">
                                                <span class="radiobtn"></span>
                                                <label for="0-1199_size">{{$size->size}}</label>
                                            </div>
                                            @endforeach
                                            {{-- <div class="area">
                                                <input class="filter-value" type="radio" id="1200-1999_size" name="size" value="1200-1999">
                                                <span class="radiobtn"></span>
                                                <label for="1200-1999_size">১২০০-২০০০ বর্গফুট</label>
                                            </div>
                                            <div class="area">
                                                <input class="filter-value" type="radio" id="2000-300000_size" name="size" value="2000-300000">
                                                <span class="radiobtn"></span>
                                                <label for="2000-300000_size">২০০০ বর্গফুটের ওপরে</label>
                                            </div> --}}
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

    $(document).ready(function(){

        $(".remove-filter").click(function(){

            var clickedData = $(this).attr('data');
            if(clickedData == 'property_type'){
                $('#remove_property_type_input').val('');
            }

            if(clickedData == 'district'){
                $('#remove_district_input').val('');
                //$('#remove_area_input').val('');
            }

            if(clickedData == 'area'){
                $('#remove_area_input').val('');
            }

            if(clickedData == 'size'){
                $('#remove_size_input').val('');
            }

            if(clickedData == 'price'){
                $('#remove_price_input').val('');
            }

            jQuery('.remove-search-filter').submit();
        });

        $(document).delegate('.filter-value','change',function () {
   
            if ($(this).attr('name')=='district') {
                $('#remove_area_input').val('');
                $("input[name='area']").prop('checked', false);
            }
            if ($(this).attr('name')=='area') {
                if (!$(this).parent().parent().find('.filter-value').prop('checked')) {
                     $("input[name='district']").prop('checked', false);
                }
            }
            jQuery(this).closest('.search-form-left-filter').submit();
        });


    });
    $(document).delegate('.radiobtn','click',function () {if ($(this).attr('name')=='district') {
    $('#remove_area_input').val('');
    $("input[name='area']").prop('checked', false);
    }if ($(this).attr('name')=='area') {
    if (!$(this).parent().parent().find('.filter-value').prop('checked')) {
    $("input[name='district']").prop('checked', false);
    }
    }$(this).parent().find( ".filter-value" ).first().prop('checked',true);jQuery(this).closest('.search-form-left-filter').submit();
    });

</script>

@endsection