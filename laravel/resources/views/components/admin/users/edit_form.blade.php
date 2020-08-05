<div class="content-wrapper">
<div class="main-wrap">
    <div class="section section-padding news-single-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <div class="news-single">
                        <div class="news-single-main">
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-md-4 col-md-offset-4">
                                        @foreach($user as $u)
                                            <p class="lead">Edit user</p>
                                            <form action="{{ route("users.update", $id = $u->id_user) }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input name="first_name" type="text" value="{{ $u->firstName }}" class="form-control" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input name="last_name" type="text" value="{{ $u->lastName }}" class="form-control" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input name="email" type="text" value="{{ $u->email }}" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <p><i>Roles:</i></p>
                                                    @foreach($roles as $role)
                                                        <input id="role{{$role->id_role}}" name="role_id" class="chk-col-deep-purple" value="{{ $role->id_role }}" {{ $role->id_role == $u->id_role ? "checked" : "" }} type="radio">
                                                        <label for="role{{$role->id_role}}"> {{ $role->role }} </label>
                                                    @endforeach
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-primary waves-amber" value="Edit">
                                                    <a href="{{ route("users.index") }}" class="btn btn-warning waves-effect">Cancel</a>
                                                </div>
                                            </form>
                                        @endforeach
                                            @if($message = Session::get('error'))
                                                <div class="alert alert-danger alert-block">
                                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @endif
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

                                    </div>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</div>
