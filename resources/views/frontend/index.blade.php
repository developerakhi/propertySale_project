@extends('layouts.frontendPartial.frontend')

@section('content')
@include('frontend.include.banner')

<section>
    <div class="container-fluid w90">
         <div class="homehouse padtop30 projecthome">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-bold" style="color:#6a6a6a;">Looking for a Quicker Solution?</h2>
                    <p class="text-p">Below is the latest real estate quicker solution we get regularly updated from reliable sources.</p><br>
                </div>
            </div> 
                <div class="blog-container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 wow fadeInUp hov-effect" style="visibility: visible; animation-name: fadeInUp;">
                            <a href="" class="btn btn-primary feature-titlel material-bubble all" data-toggle="modal" data-target="#modalCart" id="multistepFormForBuy">
                                <h5 class="feature__title">
                                    <span>Buy</span>
                                </h5>
                            </a>
                            <div class="single__feature">
                                <div class="card__body" style="margin-top: 60px;">
                                    <div class="feature__img">
                                        <img src="{{asset('public/frontend/images/buy-01.png')}}" alt="" width="40%">
                                    </div>
                                        <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                          aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <div class="col-md-12">
                                                    <h4 class="modal-title" id="myModalLabel">Submit Request</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                     <p>
                                                        Please provide all the necessary information below for a more efficient and effective service.
                                                     </p>
                                                </div>
                                               
                                              </div>
                                              <div class="">
                                                <div class="modal_forms" style="text-align:left; margin:20px;">
                                                    <form action="{{route('customer.query.store')}}" method="post">
                                                        @csrf
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Name <span>*</span></label>
                                                          <input class="form-control" type="text" name="name" placeholder="Enter Name">
                                                        </div>
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Contact Number <span>*</span></label>
                                                          <input class="form-control" type="number" name="phone" placeholder="Enter Contact Number">
                                                        </div>
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Select Location <span>*</span></label>
                                                          <select class="form-control form-control-sm">
                                                              <option>Small select</option>
                                                          </select>
                                                        </div>
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Additional Info</label>
                                                          <textarea class="form-control" name="decription" placeholder="Example: Budget,Sqft,Bed etc "></textarea>
                                                        </div>
                                                        <span class="alart__text">*Marked fields are mendatory</span><br><br>
                                                      <div class="md-form mb-5">
                                                          <button type="submit" class="form__btn " style="width: 100%;" id="submitMultistepForm2">Submit</button>
                                                      </div>
                                                    </form>
                                                </div>
                                        
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                    <p>Buy the property you desire through an uncomplicated and easy process with Apex Property</p>
                                </div>
                                <div class="text-center">
                                    <a href="" class="feature__btn" id="multistepFormForBuy" data-toggle="modal" data-target="#modalCart">Submit Request</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInUp hov-effect" style="visibility: visible; animation-name: fadeInUp;">
                            <a href="" class="btn btn-primary feature-titlel all" data-toggle="modal" data-target="#modalCart" id="multistepFormForRent">
                                <h5 class="feature__title">
                                    <span>Rent</span>
                                </h5>
                            </a>
                           
                            <div class="single__feature">
                                <div class="card__body" style="margin-top: 60px;">
                                    <div class="feature__img">
                                        <img src="{{asset('public/frontend/images/rent-01.png')}}" alt="" width="40%">
                                    </div>
                                        <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                          aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <div class="col-md-12">
                                                    <h4 class="modal-title" id="myModalLabel">Submit Request</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                     <p>
                                                        Please provide all the necessary information below for a more efficient and effective service.
                                                     </p>
                                                </div>
                                               
                                              </div>
                                              <div class="">
                                                <div class="modal_forms" style="text-align:left; margin:20px;">
                                                    <form action="" method="post">
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Name <span>*</span></label>
                                                          <input class="form-control" type="text" placeholder="Enter Name">
                                                        </div>
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Contact Number <span>*</span></label>
                                                          <input class="form-control" type="number" placeholder="Enter Contact Number">
                                                        </div>
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Select Location <span>*</span></label>
                                                          <select class="form-control form-control-sm">
                                                              <option>Small select</option>
                                                          </select>
                                                        </div>
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Additional Info</label>
                                                          <textarea class="form-control" name="additionalinfo" placeholder="Example: Budget,Sqft,Bed etc "></textarea>
                                                        </div>
                                                        <span class="alart__text">*Marked fields are mendatory</span><br><br>
                                                      <div class="md-form mb-5">
                                                          <button type="submit" class="form__btn " style="width: 100%;" id="submitMultistepForm2">Submit</button>
                                                      </div>
                                                    </form>
                                                </div>
                                        
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                    <p>Explore Apex Property's quick rental solutions to find the property you want in the location you prefer</p>
                                </div>
                                <div class="text-center">
                                    <a href="" class="feature__btn" data-toggle="modal" data-target="#modalCart" id="multistepFormForBuy">Submit Request</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 sell-div wow fadeInUp hov-effect" style="visibility: visible; animation-name: fadeInUp;">
                           <a href="" class="btn btn-primary feature-titlel all" data-toggle="modal" data-target="#modalCart" id="multistepFormForSell">
                                <h5 class="feature__title">
                                    <span>Sell</span>
                                </h5>
                            </a>
                            <div class="single__feature">
                                <div class="card__body" style="margin-top: 60px;">
                                    <div class="feature__img">
                                        <img src="{{asset('public/frontend/images/sell-01.png')}}" alt="" width="40%">
                                    </div>
                                        <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                          aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <div class="col-md-12">
                                                    <h4 class="modal-title" id="myModalLabel">Submit Request</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                     <p>
                                                        Please provide all the necessary information below for a more efficient and effective service.
                                                     </p>
                                                </div>
                                              </div>
                                              <div class="">
                                                <div class="modal_forms" style="text-align:left; margin:20px;">
                                                    <form action="" method="post">
                                                        @csrf
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Name <span>*</span></label>
                                                          <input class="form-control" type="text" placeholder="Enter Name">
                                                          <input type="hidden" name="property_id" value="" >
                                                        </div>
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Contact Number <span>*</span></label>
                                                          <input class="form-control" type="number" placeholder="Enter Contact Number">
                                                        </div>
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Email (Optional)</label>
                                                          <input class="form-control" type="email" placeholder="Enter Email">
                                                        </div>
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Select Location <span>*</span></label>
                                                          <select class="form-control form-control-sm">
                                                              <option>Small select</option>
                                                          </select>
                                                        </div>
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Additional Info</label>
                                                          <textarea class="form-control" name="additionalinfo" placeholder="Example: Budget,Sqft,Bed etc "></textarea>
                                                        </div>
                                                        <span class="alart__text">*Marked fields are mendatory</span><br><br>
                                                      <div class="md-form mb-5">
                                                          <button type="submit" class="form__btn " style="width: 100%;" id="submitMultistepForm2">Submit</button>
                                                      </div>
                                                    </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    <p>List your property and let Apex take on the responsibility of selling your property to the right buyer</p>
                                </div>
                                <div class="text-center">
                                    <a href="" class="feature__btn" data-toggle="modal" data-target="#modalCart" id="multistepFormForBuy">List Property</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInUp hov-effect" style="visibility: visible; animation-name: fadeInUp;">
                            <a href="" class="btn btn-primary feature-titlel all" data-toggle="modal" data-target="#modalCart" id="multistepFormForTo-Let">
                                <h5 class="feature__title">
                                    <span>To-Let</span>
                                </h5>
                            </a>
                            <div class="single__feature">
                                <div class="card__body" style="margin-top: 60px;">
                                    <div class="feature__img">
                                        <img src="{{asset('public/frontend/images/to-let-01.png')}}" alt="" width="40%">
                                    </div>
                                        <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                          aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <div class="col-md-12">
                                                    <h4 class="modal-title" id="myModalLabel">Submit Request</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                     <p>
                                                        Please provide all the necessary information below for a more efficient and effective service.
                                                     </p>
                                                </div>
                                              </div>
                                              <div class="">
                                                <div class="modal_forms" style="text-align:left; margin:20px;">
                                                    <form action="" method="post">
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Name <span>*</span></label>
                                                          <input class="form-control" type="text" placeholder="Enter Name">
                                                        </div>
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Contact Number <span>*</span></label>
                                                          <input class="form-control" type="number" placeholder="Enter Contact Number">
                                                        </div>
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Email (Optional)</label>
                                                          <input class="form-control" type="email" placeholder="Enter Email">
                                                        </div>
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Select Location <span>*</span></label>
                                                          <select class="form-control form-control-sm">
                                                              <option>Small select</option>
                                                          </select>
                                                        </div>
                                                        <div class="md-form mb-5">
                                                          <label data-error="wrong" data-success="right" style="font-weight:bold;">Additional Info</label>
                                                          <textarea class="form-control" name="additionalinfo" placeholder="Example: Budget,Sqft,Bed etc "></textarea>
                                                        </div>
                                                        <span class="alart__text">*Marked fields are mendatory</span><br><br>
                                                      <div class="md-form mb-5">
                                                          <button type="submit" class="form__btn " style="width: 100%;" id="submitMultistepForm2">Submit</button>
                                                      </div>
                                                    </form>
                                                </div>
                                        
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                    <p>Do you have a property to let? We have thousands of tenants who are looking just for your property</p>
                                </div>
                                <div class="text-center">
                                    <a href="" class="feature__btn" data-toggle="modal" data-target="#modalCart" id="multistepFormForBuy">List Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
</section>
<section>
    <div class="container-fluid w90">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-bold" style="color:#6a6a6a;">Plots in Bashundhara Dhaka</h2>
                </div>
            </div>
            
            <form class="row" action="{{route('home.searchPlot')}}" method="get" id="ajax-filters-form">
                    <div class="col-md-2"></div>
                    <div class="form-group col-md-2" style="float:left;">
                        <select name="type" class="form-select form-control">
                          <option value="">All Type</option>
                          @foreach ($data as $item)
                            <option value="{{$item->id}}">{{$item->type}}</option>
                          @endforeach
                        </select>
                    </div>
                    
                <div class="form-group col-md-2" style="float:left;">
                    <select class="selectpicker form-select form-control" name="min" placeholder="Min.Price">
                      <option value="">Any</option>
                      <option value="30000">৳30,00000</option>
                      <option value="40000">৳40,00000</option>
                      <option value="50000">৳50,00000</option>
                    </select>
                </div>
                <div class="form-group col-md-2" style="float:left;">
                    <select name="max" class="selectpicker houzez-field-textual form-control elementor-size-sm">
                      <option value="">Any</option>
                      <option value="100000">৳1,00,000</option>
                      <option value="200000">৳200000</option>
                      <option value="300000">৳300000</option>
                    </select>
                </div>
                <div class="form-group col-md-2" style="float:left;">
                    <button type="submit" class="btn btn-primary btn-sm" style="background: #7dc732; color:#fff; padding: 6px 20px;">Search</button>
                </div>
                <div class="col-md-2"></div>
            <!--</div>-->
        </form>
        
    </div>
</section><br>
<section>
    <div class="container-fluid w90">
       
            <div class="row">
                <div class="col-12">
                    <h2 class="text-bold" style="color:#6a6a6a;">Popular Bangladesh Neighborhoods</h2>
                </div>
            </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-1">
                <div class="land">
                    <span class="feature__title">
                        <a href="https://iconhomesbd.com/properties" data-toggle="modal" data-target="#modalCart" id="multistepFormForBuy">Land</a>
                    </span>
                </div>
            </div>
            <div class="col-md-1">
                <div class="land">
                    <span class="feature__title">
                        <a href="https://iconhomesbd.com/properties" data-toggle="modal" data-target="#modalCart" id="multistepFormForBuy">Flat</a>
                    </span>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section><br>

<section>
    <div class="container-fluid w90">
        <div class="homehouse padtop30 projecthome">
            <div class="blog-container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6 gul-dhan">
                        <div class="item itemarea gul-dhan-div">
                            <a href="{{route('home.search-type', 8)}}">
                                <h4>GULSHAN</h4>
                                <img src="{{asset('public/frontend/images/new-place/dgfgf.png')}}" onmouseover="this.src='{{asset('public/frontend/images/new-place/std-01.png')}}'" onmouseout="this.src='{{asset('public/frontend/images/new-place/dgfgf.png')}}'" alt=""  width="400px" height="200px" />
                            </a>
                            <div class="text-right">
                                <a href="https://iconhomesbd.com/properties" class="btn-hover">View Properties</a>
                            </div>
                        </div>
                        <div class="item itemarea dhanmondy">
                            <a href="{{route('home.search-type', 10)}}">
                                <h4>DHANMONDI</h4>
                                <img src="{{asset('public/frontend/images/new-place/feh.png')}}" onmouseover="this.src='{{asset('public/frontend/images/new-place/wqetwd.png')}}'" onmouseout="this.src='{{asset('public/frontend/images/new-place/feh.png')}}'" alt=""  width="400px" height="200px" />

                            </a>
                            <div class="text-right">
                                <a href="https://iconhomesbd.com/properties" class="btn-hover">View Properties</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="item itemarea bashundara">
                            <a href="{{route('home.search-type', 7)}}" class="myimg1">
                                <h4>BASHUNDHARA</h4>
                                <img src="{{asset('public/frontend/images/new-place/ggg.png')}}" onmouseover="this.src='{{asset('public/frontend/images/new-place/std-03.png')}}'" onmouseout="this.src='{{asset('public/frontend/images/new-place/ggg.png')}}'" alt=""  width="400px" height="410px" />
                            </a>
                            <div class="text-right">
                                <a href="https://iconhomesbd.com/properties" class="btn-hover">View Properties</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 uttara">
                      <div class="item itemarea">
                        <a href="{{route('home.search-type', 5)}}" class="myimg2">
                            <h4>UTTARA</h4>
                            <img src="{{asset('public/frontend/images/new-place/gtert.png')}}" onmouseover="this.src='{{asset('public/frontend/images/new-place/std-04.png')}}'" onmouseout="this.src='{{asset('public/frontend/images/new-place/gtert.png')}}'" alt=""  width="400px" height="200px" />
                        </a>
                        <div class="text-right">
                            <a href="https://iconhomesbd.com/properties/uttara-3rd-phase-land-sale-kornar?preview=true" class="">View Properties</a>
                        </div>
                    </div>
                    <div class="item itemarea aftaf">
                        <a href="{{route('home.search-type', 9)}}" class="myimg4">
                            <h4>AFTABNAGAR</h4>
                            <img src="{{asset('public/frontend/images/new-place/ggweg.png')}}" onmouseover="this.src='{{asset('public/frontend/images/new-place/std-05.png')}}'" onmouseout="this.src='{{asset('public/frontend/images/new-place/ggweg.png')}}'" alt=""  width="400px" height="200px" />
                        </a>
                        <div class="text-right">
                            <a href="https://iconhomesbd.com/properties" class="btn-hover">View Properties</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row all-btn">
            <div class="col-md-5 col-lg-5 col-sm-12"></div>
                <div class="view-all">
                    <span class="feature__title">
                        <a href="https://iconhomesbd.com/properties">View all</a>
                    </span>
                </div>
            <div class="col-md-5 col-lg-5 col-sm-12"></div>
        </div>
    </div>
</section><br>



@endsection