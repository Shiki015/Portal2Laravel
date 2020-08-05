<!-- Footer Start -->

<footer class="text-white">
    <div class="footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 sm-bottom-40">
                    <div class="widget about-widget">
                        <div class="widget-inner">
                            <a class="footer-logo" href="#">
                                <img src="{{asset('images/template/logo2.png')}}" alt="Footer logo">
                            </a>
                            <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ducimus, atque. Praesentium suscipit provident explicabo dignissimos nostrum numquam deserunt earum accusantium et fugit.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="widget category-widget">

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="widget newsletter-widget">
                        <h3 class="widget-title">Newsletter</h3>
                        <div class="widget-inner">
                            <p>Sign up for our mailling list to get latest updates videos and upcomming Movie</p>

                            <form  class="subscription" action="{{ url("/subscribe") }}" method="post">
                                @csrf
                                <input type="email" name="email" placeholder="Email Address" >
                                <button type="submit" name="emailsubmit"><i class="fa fa-arrow-circle-right"></i></button>

                                <p class="newsletter-success">
                                @if($message = Session::get('success-sub'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @endif</p>

                                <p class="newsletter-error">
                                    @if(count($errors)>0)
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" align="right">x</button>
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    @if($message = Session::get('message-sub'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">x</button>
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @endif
                                        </p>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="copyright-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 col-xs-12 xs-text-center">
                    <a href="{{asset('Portal2Dokumentacija.pdf')}}" target="_blank"><i class="fa fa-book"></i> Documentation</a>
                </div>
                <div class="col-md-6 col-sm-5 col-xs-12 xs-text-center">
                    <p class="copyright-text">&copy; 2017 <a href="#">BigShow</a>. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Script -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI')}}"></script>
<script src="{{asset('assets/js/map.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@yield('script')

</body>


</html>
