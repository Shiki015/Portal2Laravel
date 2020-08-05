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
                                        <p class="lead">Add New Category</p>
                                        <form action="{{ route("category.store") }}" method="post">

                                            @csrf
                                            <div class="form-group">

                                                <div class="form-line">

                                                    <input name="category_name" type="text"  class="form-control" placeholder="Category Name">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <input type="submit" class="btn btn-primary waves-amber" value="Add">

                                                <a href="{{ route("category.index") }}" class="btn btn-warning waves-effect">Cancel</a>

                                            </div>

                                        </form>

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

