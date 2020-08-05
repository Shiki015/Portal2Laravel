<div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-5">
    <div class="sidebar">
        <div class="widget search-widget">
            <div class="widget-inner">
                <form id="sidebarSearch" class="searchform" action="/search" method="get">
                    <input type="search" name="searchinput" placeholder="Search..." required>
                    <button type="submit" name="searchsubmit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>

        <div class="widget thumb-post-widget">
            <h3 class="widget-title">Latest Posts</h3>
            <div class="widget-inner">


                    @foreach($recent as $r)

                    <div class="widget-post">
                        <a class="widget-thumb" href="/newsDetail/{{ $r->id_news }}">
                            <img src="{{ asset($r->big_photo) }}" alt="{{ $r->title_news }}" width="80px" height="80px">
                        </a>
                        <div class="widget-post-content">
                            <a class="widget-post-title" href="/newsDetail/{{ $r->id_news }}">{{ $r->title_news }}</a>
                            <p class="widget-post-date">{{ $r->created_at_news }}</p>
                        </div>

                    </div>
                @endforeach



            </div>
        </div>

        <div class="widget tag-widget">
            <h3 class="widget-title">Post Tag</h3>
            <div class="widget-inner">
                <div class="tags">
                    @foreach($tags as $tag)
                    <a href="{{url("/tag/".$tag->id_tag) }}" class="tag">{{ $tag->tag }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

