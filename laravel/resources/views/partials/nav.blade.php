<body>

<!-- Preloader -->
<div class="preloader" id="preloader">
    <div class="lds-css ng-scope">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- Preloader End -->

<!-- Top Header -->
<header class="topbar text-white" id="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-8">
                <p class="topbar-intro">Enjoy in your favourite tabloid ! </p>
            </div>
            <div class="col-lg-6 col-sm-4">
                <div class="topbar-right-btns">
                            <a href="{{url("/contact")}}" class="nav-link">Contact</a>&nbsp
                        @if(!session()->has('user'))
                                <a href="{{ url('/login') }}" class="nav-link">Log In</a>&nbsp
                        @else
                                <a href="#">User: {{ session('user')->firstName }}</a>&nbsp

                              @if(session()->get('user')->id_role == 1)
                                  <a href="{{ route('users.index') }}">Admin panel</a>&nbsp
                                @endif
                             <a href="{{ url('/logout') }}" class="nav-link">Logout</a>&nbsp
                        @endif



                </div>
            </div>
        </div>
    </div>
</header>
<!-- Top Header End -->

<!-- Main Header -->
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('images/template/logo2.png')}}" alt="Site Logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav-collapse">

            <ul class="nav navbar-nav navbar-right">

                @foreach($category as $cat)

                    <li class="cat"><a href="{{ url("/category/".$cat->id_category)  }}">{{ $cat->category }}<span> </span></a></li>

                @endforeach


            </ul>

        </div>
    </div>
</nav>
<!-- Main Header End -->
