@extends('layouts.frontendPartial.frontend')

@section('content')
<div class="home_banner1">
    @if(isset($data->property_banner))<img class="img-fit" src="{{url($data->property_banner)}}" alt="{{url($data->property_banner)}}" style="height: 550px; width: 100%;">@endif
</div>
<section class="property-details-wrap pt-100 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="property-details">
                    <div class="row align-items-start">
                        <div class="col-md-8">
                            <div class="property-title">
                                <h2>{{$data->title}}</h2>
                                <ul class="property-metainfo list-style">
                                    <li>
                                        <img src="images/location.png" width="16" height="16">{{$data->location->location_name}}
                                    </li>
                                    <li>{{$data->size}}</li>                                         
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>

                    <div class="property-desc">
                        <p>{!! $data->description !!}</p>
                    </div>
                    <div class="property-desc">
                        <div class="row">
                    </div>
                </div>
                    @if($data->facilities!=null)
                    <div class="property-desc">
                        <div class="section-title style2 text-center mt-60">
                            <h4>যে সব সুবিধা থাকছে</h4>
                        </div>
                        <p>{!! $data->facilities !!}</p>     
                    </div>
                    @endif
                    <div class="style3 ptb-40">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                                    <div class="section-title style2 text-center mb-40">
                                        <h4>ছবিতে ছবিতে</h4>
                                    </div>
                                </div>
                            </div>
                            @php 
                                $images = json_decode($data->image)
                            @endphp
                            
                            
                            <div class="project-image-slider owl-carousel owl-loaded owl-drag">                                           
                                <div class="owl-stage-outer owl-height" style="height: 281px;">
                                    <div class="owl-stage" style="transform: translate3d(-1656px, 0px, 0px); transition: all 1.3s ease 0s; width: 2760px;">
                                        @foreach($images as $image)
                                        <div class="owl-item cloned" style="width: 256px; margin-right: 20px;">
                                            <div class="city-card style3" data-fancybox="" href="{{asset('public/files/property/'.$image)}}">
                                                <img src="{{asset('public/files/property/'.$image)}}" alt="">
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <button type="button" role="presentation" class="owl-prev">
                                        <span aria-label="Previous">‹</span>
                                    </button>
                                    <button type="button" role="presentation" class="owl-next">
                                        <span aria-label="Next">›</span>
                                    </button>
                                </div>
                                <div class="owl-dots">
                                    <button role="button" class="owl-dot">
                                        <span></span>
                                    </button>
                                    <button role="button" class="owl-dot active">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                   
                    <div class="ptb-40">
                        <div class="container">
                            <!--<div class="video-wrap style3 video-bg-1 bg-f ptb-100" style="background-image: url('{{asset('public/files/property/1777911004321066.png')}}')">-->
                            <div class="video-wrap style3 video-bg-1">
                                <div class="row align-items-center">
                                    <!--<div class="col-lg-7 col-md-8 order-lg-1 order-md-1 order-2 aos-init" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">-->
                                    <!--    <div class="video-content">-->
                                    <!--        <div class="content-title style1">-->
                                    <!--            <span>ভিডিও</span>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="col-lg-5 col-md-4 order-lg-2 order-md-2 order-1">-->
                                    <!--    <a class="play-video" data-fancybox="" href="https://youtu.be/https://www.youtube.com/watch?v=rwFYB6nlDD8&amp;autoplay=1">-->
                                    <!--        <span class="play-now icon"><i class="fa-solid fa-play"></i>-->
                                    <!--        <span class="ripple"></span></span>-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <iframe width="765" height="515" src="https://www.youtube.com/embed/rwFYB6nlDD8" title="Render" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <!-- ***** Brochure Start ***** -->
                <!--<div class="container">-->
                <!--    <div class="company-brochure">-->
                <!--        <div class="col-12">-->
                <!--            <div class="stall-footer">-->
                <!--                <a href="#">-->
                <!--                    <img src="{{asset('public/files/property/96181685251461.png')}}" alt="ACTS Asset Ltd.">-->
                <!--                    <span class="name">ACTS Asset Ltd.</span>-->
                <!--                </a>-->
                <!--            </div>-->
                <!--        </div>                                     -->
                <!--    </div>-->
                <!--</div>-->
                
                <!--<div class="container">-->
                    <div class="company-brochure">
                        <!--<div class="col-12">-->
                            <div class="plot-schedule">
                                <h4 style="text-align: center;"><strong>Plot Visit Schedule</strong></h4>
                            </div>
                            <div class="app-wrapper" id="three">
                                <div data-v-4dd8ff94="" class="confirm">
                                    <div data-v-4dd8ff94="" class="md-card md-theme-default">
                                        <div data-v-4dd8ff94="" class="md-card-header md-card-header-flex">
                                            <div data-v-4dd8ff94="" class="md-card-header-text">
                                                <h1 data-v-4dd8ff94="" class="md-title"> You are booking:    </h1>
                                            </div>
                                        </div>
                                        
                                        <div class="card card-1 col-md-12">
                                            <div class="card-heading"></div>
                                            <div class="card-body" style="padding: 2rem 2rem;">
                                                <form action="{{route('visitschedule.store')}}" method="POST" enctype="multipart/form-data" class="appointment" id="booking-form">
                                                    @csrf
                                                    <section class="pb-4">
                                                        <div class="container">
                                                            <h6 data-v-4dd8ff94="" class="md-title1">Please Must Select Date and Time<span style="color: red;">*</span></h6><br>
                                                            <div class="row mr">
                                                                <div class="col-lg-4">
                                                                    <input type="date" class="form-control" name="start_date">
                                                                </div>
                                                                <!--<div class="col-lg-4">-->
                                                                <!--    <input type="date" class="form-control" name="end_date">-->
                                                                <!--</div>-->
                                                                <div class="col-lg-4">
                                                                    <select type="text" class="form-control" name="time">
                                                                        <option class="day-op" value="9:00 AM - 10:00 AM">9:00 AM - 10:00 AM</option>
                                                                        <option class="day-op" value="10:00 AM - 11:00 AM">10:00 AM - 11:00 AM</option>
                                                                        <option class="day-op" value="11:00 PM - 12:00 PM">11:00 PM - 12:00 PM</option>
                                                                        <option class="day-op" value="12:00 PM - 1:00 PM">12:00 PM - 1:00 PM</option>
                                                                        <option class="day-op" value="1:00 PM - 2:00 PM">1:00 PM - 2:00 PM</option>
                                                                        <option class="day-op" value="2:00 PM - 3:00 PM">2:00 PM - 3:00 PM</option>
                                                                        <option class="day-op" value="3:00 PM - 4:00 PM">3:00 PM - 4:00 PM</option>
                                                                        <option class="day-op" value="4:00 PM - 5:00 PM">4:00 PM - 5:00 PM</option>
                                                                        <option class="day-op" value="5:00 PM - 6:00 PM">5:00 PM - 6:00 PM</option>
                                                                        <option class="day-op" value="6:00 PM - 7:00 PM">6:00 PM - 7:00 PM</option>
                                                                        <option class="day-op" value="7:00 PM - 8:00 PM">7:00 PM - 8:00 PM</option>
                                                                        <option class="day-op" value="8:00 PM - 9:00 PM">8:00 PM - 9:00 PM</option>
                                                                      </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                  <div class="form-group row">
                                                    <label for="name" class="col-sm-3 col-form-label la"><i class="fas fa-user" style="padding-right: 8px;"></i>Name</label>
                                                      <input type="text" name="name" class="form-control" placeholder="enter name">
                                                  </div>
                                                  <div class="form-group row">
                                                    <label for="email" class="col-sm-3 col-form-label la"><i class="fas fa-envelope" style="padding-right: 8px;"></i>Email</label>
                                                      <input type="email" name="email" class="form-control" placeholder="enter email" id="input">
                                                  </div>
                                                  <div class="form-group row">
                                                    <label for="phone" class="col-sm-3 col-form-label la"><i class="fas fa-phone" style="padding-right: 8px;"></i>Phone</label>
                                                      <input type="text" name="phone" class="form-control"  placeholder="enter phone number" id="input">
                                                  </div>
                                                  <div class="form-group row form-container">
                                                    <label for="notes" class="col-sm-3 col-form-label form-label"><i class="fas fa-note-sticky" style="padding-right: 8px;"></i>Notes</label>
                                                      <textarea type="text" name="notes"  class="form-control form-textarea" id="input" placeholder="text here..."></textarea>
                                                  </div>
                                                <div data-v-4dd8ff94="" class="md-card-actions">
                                                    <button data-v-4dd8ff94="" type="submit" class="md-button md-raised md-primary md-theme-default">
                                                        Book this appointment
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>   
                                </div>
                            </div>  
                           </div>
                           </div>
                </div>
                </div>
                <div class="col-xl-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h4>এই প্রকল্পে আমি আগ্রহী</h4>
                            <form action="{{route('customer.query.store')}}" method="post" id="i_agree_form" class="filter-widget">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="নাম" required>
                                    <input type="hidden" name="property_id" value="{{$data->id}}" >
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="ফোন" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" placeholder="ঠিকানা" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="ইমেইল" required="required">
                                </div>
                                <div class="form-group">
                                    <textarea name="description"  cols="30" rows="10" placeholder="কিছু জানতে চাই ... "></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn style2">সাবমিট</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>

<div class="container pb-40">
    <div class="row">
        <div class="col">
            <div class="alert alert-danger terms-conditions">* ফ্ল্যাট, জমি বা বাণিজ্যিক ভবন কেনার ব্যাপারে আপনার সিদ্ধান্তই চূড়ান্ত</div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(".js-example-tags").select2({
          tags: true
        });
    </script>
    <script>
    $(document).ready(function(){
        // Hide div by setting display to none
        $(".book-day").click(function(){
            $("#one").addClass("d-none");
            $("#two").removeClass("d-none");
        });
        
        
        $(".md-button").click(function(){
            $("#two").addClass("d-none");
            $("#three").removeClass("d-none");
        });
        
        $("#btn-two").click(function(){
            $("#two").addClass("d-none");
            $("#three").addClass("d-none");
            $("#one").removeClass("d-none");
        });
        
        $("#btn-three").click(function(){
            $("#two").addClass("d-none");
            $("#three").addClass("d-none");
            $("#one").removeClass("d-none");
        });
        
    });
    </script>
   <script>
        $(document).ready(function() {
            $('#booking-form input, #booking-form taxtarea').on('click', function() {
                $(this).parent().addClass('focused');
            });
        
            $('#booking-form input, #booking-form taxtarea').on('blur', function() {
                if ($(this).val() === '') {
                    $(this).parent().removeClass('focused');
                }
            });
        });
        
        
        
        $(document).ready(function() {
            $('.form-textarea').on('focus', function() {
                $(this).prev('.form-label').addClass('focused');
            });
        
            $('.form-textarea').on('blur', function() {
                if ($(this).val() === '') {
                    $(this).prev('.form-label').removeClass('focused');
                }
            });
        });
    </script>
    
    
@endsection