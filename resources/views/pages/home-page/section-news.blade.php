<div class="knowledge">
    <div class="d-flex align-content-center justify-content-center img-course">
        <img src="{{asset('images/homepage/sec-new/title.png')}}" alt="" style="" class="img-fluid">
    </div>
    <div class="slick-carousel position-relative mt-4">
        <button class="custom-prev-arrow-knowledge " aria-label="Previous">
            <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class="shadow-effect button-shake"/>
        </button>
        <button class="custom-next-arrow-knowledge " aria-label="Next">
            <img src="{{asset('images/arrow/right.png')}}" alt="Next" class="shadow-effect button-shake"/>
        </button>

        <div class="carousel-knowledge">
            @foreach($news as $article)
                <div class="d-flex justify-content-center">
                    <div class="card shadow-effect me-1"
                         style="width:20rem; height: 70% ">
                        <img class="rounded-custom m-3" src="{{$article->image}}"
                             alt="Card image" style="height: 50%; object-fit: cover">
                        <div class="card-body">
                            <p class="height-text-card text-center mulish-black">{{\Illuminate\Support\Str::limit($article->title,60)}}</p>
                            <p class="card-text mulish-semibold ">{{ preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($article->content), 60)) }}</p>
                            <div class="d-flex align-content-center justify-content-center ">
                                <a href=""
                                   class="btn blue-bg blue-text text-white btn-sm mb-3  btn-long button-shake mulish-black">XEM
                                    CHI TIẾT</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex align-content-center justify-content-center pb-4">
        <a href=""
           class="btn blue-bg blue-text btn-block mb-3 text-white mitr-medium longer-btn shadow-test button-shake mulish-black">XEM THÊM</a>
    </div>

    <script>
        $(document).ready(function () {
            $('.carousel-knowledge').slick({
                infinite: true,
                speed: 900,
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
                prevArrow: $('.custom-prev-arrow-knowledge'),
                nextArrow: $('.custom-next-arrow-knowledge'),
                variableWidth: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            variableWidth: false,
                        }
                    }
                ]
            });
        });
    </script>
    <style>
        .knowledge{
            background: #EAEAEA;
            padding-top: 20vh;
        }
    </style>
</div>
