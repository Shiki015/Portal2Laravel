@extends("layouts.front")
@section("context")
    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container">
                <h2 class="page-title">Request For New Password</h2>
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



                                <form class="accountform loginform" action="{{url('/forgetPassword')}}" method="POST">
                                    @csrf
                                    <h3>Forget Password</h3>
                                    <div class="basic-field">
                                        <label>Email <br/>
                                            <p>
                                                <input type="email" name="email" >
                                            </p>
                                        </label>
                                        <p class="signup-recover"> Enter your email address and we will send you new password.</p>
                                    </div>
                                    <button class="stilizovan" name="btnLogin" id="login" type="submit">Send Request</button>


                                </form>
                            </div>
                        </div>

@endsection
