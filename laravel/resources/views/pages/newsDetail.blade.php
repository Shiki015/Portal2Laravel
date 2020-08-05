@extends("layouts.front")
@section("context")
@foreach($singleNews as $news)
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header-overlay">

        </div>
    </div>
    <!-- Page Header End -->


    <div class="main-wrap">
        <div class="section section-padding news-single-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-7">
                        <div class="news-single">
                            <div class="news-single-main">

                                <p class="header-metas">{{ $news->created_at_news }} | By - {{ $news->firstName }} </p>
                                <h2 class="page-title">{{ $news->title_news }}</h2>

                                <div class="single-thumb">
                                    <img class="img-responsive"  src="{{ asset($news->big_photo) }}" alt="{{ $news->title_news }}" >
                                </div>
                                <div class="news-entry">
                                   {{ $news->desc_news }}
                                </div>
                            </div>

                            <!-- News Footer -->
                            <div class="single-footer">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="news-tag">
                                            <label>Tags: </label>
                                            @foreach($tags as $tag)
                                                <a href="{{ url("/tag/".$tag->id_tag) }}" class="tag">{{ $tag->tag }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- News Footer -->

                            <!-- Given Comment -->
                            <div class="given-comment">
                                <h3 class="given-comment-title">Comments </h3>
                                <ul class="comments">

                                    @foreach($comments as $com)
                                        <li class="comment">
                                            <div class="comment-wrap">
                                                <div class="comment-body">
                                                    <h6 class="comment-title">
                                                        <span class="commenter-name">{{ $com->firstName }}</span>
                                                        <span class="comment-date">/{{ $com->created_at_commnet }}</span>
                                                        @if(session()->get('user')->id_user == $com->id_user || session()->get('user')->id_role == 1)
                                                            <a href="{{ url( "/deleteComm/".$com->id_comment) }}"> &nbsp&nbsp<i class="fa fa-trash"></i></a>
                                                        @endif
                                                    </h6>
                                                    <div class="comment-content">
                                                        <p>{{ $com->commnet }}</p>
                                                    </div>
                                                    <a class="comment-reply" href="#" data-id="{{ $com->id_comment }}">Reply</a>
                                                    @component("components.comment", ["id" => $com->id_comment,"id_news"=>$com->id_news])@endcomponent
                                                </div>
                                            </div>

                                            @foreach($replyComments as $reply)
                                                @if($reply->parent_id == $com->id_comment)
                                                    <ul class="comments child-comments">
                                                        <li class="comment">
                                                            <div class="comment-wrap">
                                                                <div class="comment-body">
                                                                    <h6 class="comment-title">
                                                                        <span class="commenter-name">{{ $reply->firstName }}</span>
                                                                        <span class="comment-date">/{{$reply->created_at_commnet}}</span>
                                                                        @if(session()->get('user')->id_user == $reply->id_user || session()->get('user')->id_role == 1)
                                                                            <a href="{{ url( "/deleteComm/".$reply->id_comment) }}"> &nbsp&nbsp<i class="fa fa-trash"></i></a>
                                                                        @endif
                                                                    </h6>
                                                                    <div class="comment-content">
                                                                        <p>{{ $reply->commnet }}</p>
                                                                    </div>
                                                                    <a class="comment-reply" href="#" data-id="{{ $reply->id_comment }}">Reply</a>
                                                                    @component("components.comment", ["id" => $com->id_comment,"id_news"=>$reply->id_news])@endcomponent
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                @endif
                                            @endforeach

                                        </li>
                                    @endforeach
                                </ul>
                                {!! $comments->appends($_GET)->render() !!}


                            </div>
                            <!-- Given Comment -->

                            <!-- Commenting form -->
                            <div class="commenting-wrap">
                                @if($message = Session::get('success-comm'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                                @if($message = Session::get('warning-comm'))
                                    <div class="alert alert-warning alert-block">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                                <h4 class="comment-form-title">Leave Your Comments</h4>

                                <form id="comment-form" class="comment-form" action="{{ url("/addComment") }}" method="post">
                                    @csrf
                                    <div class="row">
                                            <input type="hidden" name="id_news" value="{{ $news->id_news }}"/>
                                    </div>
                                    <textarea name="comment" placeholder="Comment" rows="4"></textarea>
                                    <button type="submit" name="comment-submit">Submit</button>
                                </form>
                                <br>

                            </div>
                            <!-- Commenting form end -->

                        </div>
                    </div>
@endforeach
@endsection
