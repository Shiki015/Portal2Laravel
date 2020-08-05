@extends("layouts.front")
@section("context")
    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container">
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



                                <form class="contact-form" action="" method="POST">

                                    <h3>Contact Administrator</h3>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="email">Enter your email address</label>


                                                <input name="emailSender" id="emailSender" type="email" class="form-control"  placeholder="email">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="desc">Your message</label>


                                                <textarea name="message" id="textareaMessage"type="text" class="form-control"></textarea>

                                        </div>
                                    </div>
                                    <button class="stil" name="btnContact" id="contactAdmin" type="button">Send</button>
                                </form>
                            </div>
                        </div>

@endsection
