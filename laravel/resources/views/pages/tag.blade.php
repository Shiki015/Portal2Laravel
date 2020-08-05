
@extends("layouts.front")
@section("context")
    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container">

            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="main-wrap">
        <div class="section section-padding news-list-section">

            <div class="container">
                @foreach($tagName as $t)
                    <h2 class="page-title">News For Tag : {{ $t->tag }} </h2>
                @endforeach
                <br><br><br>
                <div class="row">
                    <div class="col-md-8 col-sm-7">
                        <div class="news-list">




                        @foreach($posts as $n)

                            @component("components.singlePost", [

                                "id" => $n->id_news,
                                "imageSrc" => $n->big_photo,
                                "imageAlt" => $n->title_news,
                                "date" => $n->created_at_news,
                                "title" => $n->title_news,
                                "description" => $n->desc_less_news,
                                "name" =>$n->firstName

                            ])


                            @endcomponent


                        @endforeach

                        <!-- Post Pagination -->

                        {!! $posts->appends($_GET)->render() !!}
                        <!-- Post Pagination End -->
                        </div>
                    </div>

@endsection

