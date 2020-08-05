
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
                <div class="row">
                    <div class="col-md-8 col-sm-7">
                        <div class="news-list">




                        @foreach($categoryNews as $n)

                            @component("components.singlePost", [

                                "id" => $n->id_news,
                                "name" => $n->firstName,
                                "imageSrc" => $n->big_photo,
                                "imageAlt" => $n->title_news,
                                "date" => $n->created_at_news,
                                "title" => $n->title_news,
                                "description" => $n->desc_less_news

                            ])


                            @endcomponent


                        @endforeach

                        <!-- Post Pagination -->

                        {!! $categoryNews->appends($_GET)->render() !!}
                        <!-- Post Pagination End -->
                        </div>
                    </div>

@endsection

