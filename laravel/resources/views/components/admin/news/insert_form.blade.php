<div class="content-wrapper">
    <div class="main-wrap">
        <div class="section section-padding news-single-section">
            <div class="container">
                <div class="row">
                        <div class="news-single">
                            <div class="news-single-main">
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4">
                                        <p class="lead">Add News</p>
                                        <form action="{{ route("news.store") }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="title" type="text" class="form-control" placeholder="Title">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label for="desc">Short Description</label>

                                                    <textarea name="description_less" type="text" class="form-control" placeholder="Short Description">
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label for="desc">Full Description</label>

                                                    <textarea name="description" class="form-control" placeholder="Full Description">
                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="form-line">

                                                    <label for="slika">News Post Picture</label>

                                                    <input id="slika" name="picture" type="file"  class="form-control">

                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <p><i>Tags:</i></p>
                                                <p> If there isn't tag you need please go <a href="{{route('tag.create')}}">here</a> and add new one!</p>

                                            @foreach($tags as $tag)
                                                    <span><input name="tags[]" type="checkbox" value="{{$tag->id_tag}}"/>&nbsp{{$tag->tag}}</span>&nbsp&nbsp&nbsp&nbsp
                                                @endforeach
                                            </div>
                                            <div class="form-group">
                                                <p><i>Category:</i></p>
                                                <p> If there isn't category you need please go <a href="{{route('category.create')}}">here</a> and add new one!</p>

                                            @foreach($categories as $cat)
                                                    <span><input name="categories[]" type="checkbox" value="{{$cat->id_category}}"/>&nbsp{{$cat->category}}</span>&nbsp&nbsp&nbsp&nbsp
                                                @endforeach
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary waves-amber" value="Add">
                                                <a href="{{ route("news.index") }}" class="btn btn-warning waves-effect">Cancel</a>
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

<script>
    CKEDITOR.replace( 'description' );
    CKEDITOR.replace( 'description_less' );

</script>
