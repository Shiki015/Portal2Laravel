
@extends("layouts.front")
@section("context")
    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container">
                <h2 class="page-title">Register</h2>
            </div>
        </div>
        <div class="main-wrap">
            <div class="section section-padding news-list-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-7">
                            <div class="news-list">
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
                                <form class="accountform signupform" method="post" action="{{ url("/doRegister") }}">
                                    @csrf
                                    <h3>Sign up, it's free..</h3>
                                    <div class="basic-field">

                                        <label>E-mail address <br/>
                                            <p>
                                                <input  id="email" type="email" name="email" >
                                            </p>
                                        </label>
                                        <label>Password <br/>
                                            <p>
                                                <input id="pass" type="password" name="password" >
                                            </p>
                                        </label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>First Name <br/>
                                                    <p>
                                                        <input id="fname" type="text" name="fname" >
                                                    </p>
                                                </label>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Last Name <br/>
                                                    <p>
                                                        <input id="lname" type="text" name="lname" >
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button id="register" type="submit">Register</button>
                                    <p class="signup-recover">Do you already have an account? <a href="{{url('/login')}}">Login here</a></p>
                                </form>
                            </div>
                        </div>

@endsection
