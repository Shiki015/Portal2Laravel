@extends("layouts.front")
@section("context")
    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container">
                <h2 class="page-title">Login</h2>
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

                                @if($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                 @endif



                                <form class="accountform loginform" action="{{url('/doLogin')}}" method="POST">
                                    @csrf
                                    <h3>Log in</h3>
                                    <div class="basic-field">
                                        <label>Email <br/>
                                            <p>
                                                <input type="email" name="email" >
                                            </p>
                                        </label>
                                        <label>Password <br/>
                                            <p>
                                                <input type="password" name="password" >
                                            </p>
                                        </label>
                                    </div>
                                    <button class="stilizovan" name="btnLogin" id="login" type="submit">Login</button>
                                    <p class="signup-recover"><a  class="popup" href="{{url("/forgetPassword")}}">Forget password ?</a></p>
                                    <p class="signup-recover">Don't you have an account yet? <a href="{{url('/signup')}}">Sign up here</a></p>

                                </form>
                            </div>
                        </div>

@endsection
