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
                                    @foreach($tags as $tag)
                                        <p class="lead">Edit Tag</p>
                                        <form action="{{ route("tag.update", $id = $tag->id_tag) }}" method="post">

                                            @csrf
                                            <div class="form-group">

                                                <div class="form-line">

                                                    <input name="tag_name" type="text" value="{{ $tag->tag }}" class="form-control" placeholder="Tag Name">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <input type="submit" class="btn btn-primary waves-amber" value="Edit">

                                                <a href="{{ route("tag.index") }}" class="btn btn-warning waves-effect">Cancel</a>

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
</div>
