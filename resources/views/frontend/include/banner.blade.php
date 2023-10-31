
<div class="home_banner" style="height: 550px; background-image: url('{{asset('public/frontend/images/banner.jpg')}}')">
    <div class="container">
      <div class="row">
          <div class="col-lg-2 col-sm-12"></div>
          <div class="col-lg-8 col-sm-12">
              <div class="search-property style1">
                  <form action="{{route('home.search')}}" class="property-search-form" method="GET">
                    @csrf
                      <div class="row">
                          <div class="col-md-3 col-lg-3 col-sm-12">
                              <div class="form-group">
                                  <select name="category_id" id="category_id" class="form-select form-control" onchange="myFunction()">
                                      <option value="" disabled="" selected="">কী খুঁজছেন?</option>
                                      @foreach ($categories as $category)
                                      <option value="{{$category->id}}">{{$category->category_name}}</option>
                                      @endforeach
                                  </select>
                              </div>
                             
                          </div>
                          <div class="col-md-3 col-lg-3 col-sm-6">
                              <div class="form-group">
                                  <select name="location_id" id="location_id" class="form-control">
                                      <option value="" disabled="" selected="">কোথায়?</option>
                                      @foreach ($locations as $location)
                                      <option value="{{$location->id}}">{{$location->location_name}}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-3 col-lg-3 col-sm-6">
                              <div class="form-group">
                                  <select name="size_id" id="size_id" class="form-control">
                                      <option value="" disabled="" selected="">আকার?</option>
                                      
                                  </select>
                              </div>
                             
                          </div>
                          <div class="col-md-3 col-lg-3 col-sm-6">
                              <div class="form-group">
                                  <button type="submit" id="submitbutton" class="btn style2">খুঁজুন</button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
          <div class="col-lg-2 col-sm-12"></div>
      </div>
  </div>
</div>

