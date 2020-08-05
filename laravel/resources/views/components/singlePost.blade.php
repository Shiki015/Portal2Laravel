
<div class="news-item">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <a class="news-thumb" href="{{ url("/newsDetail/".$id) }}">
                <img src="{{ asset($imageSrc) }}" alt="{{ $imageAlt }}">
            </a>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="news-content">
                <p class="news-metas">
                    <span class="news-meta date-meta">{{ $date }}</span> | <span class="news-meta author-meta">By - <p>{{ $name }}</p></span>
                </p>
                    <h3 class="news-title"><a href="{{ url("/newsDetail/".$id) }}">{{ $title }}</a></h3>
                <p class="news-excerpt">{{ $description }}</p>
                <a class="news-link-btn" href="{{url("/newsDetail/".$id)}}">More</a>
            </div>
        </div>
    </div>
</div>
