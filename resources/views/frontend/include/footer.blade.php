<footer style="background-image: url('{{asset('public/frontend/images/rectangle-4.jpg')}}')">
    <div class="container-fluid w90" style="margin-top: 20px;">
        <div class="row">
            <div class="col-sm-3 footer-text" style="">
                <p><i class="fas fa-map-marker-alt"></i> &nbsp;{{$setting->address}}</p>
                <p><i class="fas fa-phone-square"></i> Hotline: &nbsp;<a href="tel:{{$setting->phone}}">{{$setting->phone}}</a></p>
                <p><i class="fas fa-envelope"></i> Email: &nbsp;<a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
            </div>
            <div class="col-sm-5 padtop10">
                <div class="row" style="flex-wrap: nowrap;">
                    <div class="col-sm-4">
                        <div class="menufooter">
                            <h4>About</h4>
                            <ul>
                                <li><a href="#"><span>About us</span></a></li>
                                <li><a href="#"><span>Contact us</span></a></li>
                                <li><a href="#"><span>Careers</span></a></li>
                                <li><a href="#"><span>Terms &amp; Conditions</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="menufooter">
                            <h4 class="hide">More information</h4>
                            <h4 class="display-none">information</h4>
                            <ul>
                                <li><a href="#"><span>All projects</span></a></li>
                                <li><a href="#"><span>All properties</span></a></li>
                                <li><a href="#"><span>Houses for sale</span></a></li>
                                <li><a href="#"><span>Houses for rent</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="menufooter">
                            <h4>News</h4>
                            <ul>
                                <li><a href="#"><span>Latest news</span></a></li>
                                <li><a href="#"><span>House design</span></a></li>
                                <li><a href="#"><span>Building materials</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row social-icon" style="flex-wrap: nowrap;">
                    @if ($setting->facbook_links != null)
                    <a href="{{$setting->facbook_links}}" target="_blank"><img width="60" height="60" src="{{asset('public/frontend/images/vector-smart-objectt-01.png')}}" /></a>
                    @endif
                    
                    @if ($setting->instagram_links != null)
                    <a href="{{$setting->instagram_links}}" target="_blank"><img width="60" height="60" src="{{asset('public/frontend/images/vector-smart-objectt-02.png')}}" /></a>
                    @endif

                    @if ($setting->twitter_links != null)
                    <a href="{{$setting->twitter_links}}" target="_blank"><img width="60" height="60" src="{{asset('public/frontend/images/vector-smart-objectt-03.png')}}" /></a>
                    @endif

                    @if ($setting->linkedin_links != null)
                    <a href="{{$setting->linkedin_links}}" target="_blank"><img width="60" height="60" src="{{asset('public/frontend/images/vector-smart-objectt-04.png')}}" /></a>
                    @endif

                    @if ($setting->youtube_links != null)
                    <a href="{{$setting->youtube_links}}" target="_blank"><img width="60" height="60" src="{{asset('public/frontend/images/vector-smart-objectt-05.png')}}" /></a>
                    @endif
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="col-sm-12">
                <p class="text-left">
                    ICON HOMES &copy; 2023.All Rights Reserved. Privacy Policy.
                </p>
            </div>
        </div>
    </div>
</footer>
<!--FOOTER-->