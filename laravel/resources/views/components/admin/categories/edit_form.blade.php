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
                                    @foreach($category as $cat)
                                        <p class="lead">Edit category</p>
                                        <form action="{{ route("category.update", $id = $cat->id_category) }}" method="post">

                                            @csrf
                                            <div class="form-group">

                                                <div class="form-line">

                                                    <input name="category_name" type="text" value="{{ $cat->category }}" class="form-control" placeholder="Category Name">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <input type="submit" class="btn btn-primary waves-amber" value="Edit">

                                                <a href="{{ route("category.index") }}" class="btn btn-warning waves-effect">Cancel</a>

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
