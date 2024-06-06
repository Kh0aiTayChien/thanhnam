<div class="section-2">
    <div class="row-test sec2-homepage-pc">
        <div class="col-xxl-4 col-md-5 containersec2-HP">
            <p class="headersec2-HP montserrat-extrabold">GIỚI THIỆU VỀ</p>
            <p class="headersec2-HP2 montserrat-extrabold">Nino's Classes</p><br>
            <p class="contentsec2-HP montserrat-medium">Trung tâm Thầy Nino TOEIC Nhí Nhố hay còn được biết đến là Nino’s
                Classes được
                thành
                lập từ năm 2011, được biết đến là một trong những đơn vị đào tạo Anh ngữ hàng đầu tại Hà Nội.</p><br>
            <div class="col-xxl-4 col-md-5">
                <a href=""
                   class="btn yellow-bg btn-block mb-3 text-white mitr-medium longer-btn shadow-effect button-shake montserrat-bold">TÌM
                    HIỂU
                    THÊM</a>
            </div>
        </div>
        <img src="{{asset('images/homepage/section4/Mask group.png')}}" class="col-xxl-4 col-md-5 imgsec2-HP">
    </div>
    <div class="row-test sec3-homepage-pc">
        <img src="{{asset('images/homepage/section5/Mask group (1).png')}}" class="col-xxl-4 col-md-5 imgsec3-HP">
        <div class="col-xxl-4 col-md-5 contentsec3-HP">
            <p class="headersec2-HP montserrat-extrabold">GIỚI THIỆU VỀ </p>
            <p class="headersec2-HP2 montserrat-extrabold">Thầy Nino</p><br>
            <p class="contentsec2-HP montserrat-medium">Thầy Nino tên thật là Nguyễn Hoài Nam, sinh ngày 09/11/1989. Thầy
                Nino đã tốt
                nghiệp TESOL học viện American Institute (Mỹ) và có kinh nghiệm trên 11 năm giảng dạy. Với sự trẻ trung,
                năng động, nhiệt huyết, thầy luôn đem lại cho học viên năng lượng tích cực và những giờ học thú vị.
            </p><br>
            <div class="col-xxl-4 col-md-5">
                <a href=""
                   class="btn yellow-bg btn-block mb-3 text-white mitr-medium longer-btn shadow-effect button-shake montserrat-bold">TÌM
                    HIỂU
                    THÊM</a>
            </div>
        </div>
    </div>
    <div class="section-2-mb">
        <div class="sec2mb-homepage">
            <p class="headersec2-mb-HP montserrat-extrabold">GIỚI THIỆU VỀ</p>
            <p class="headersec2-mb2-HP montserrat-extrabold">Nino's Classes</p>
            <p class="contentsec2-mb-HP montserrat-medium">Trung tâm Thầy Nino TOEIC Nhí Nhố hay còn được biết đến là Nino’s Classes được
                thành
                lập từ năm 2011, được biết đến là một trong những đơn vị đào tạo Anh ngữ hàng đầu tại Hà Nội.</p>
            <img src="{{asset('images/homepage/section4/Mask group.png')}}" class="imgsec2-mb-HP">
            <div class="col-xxl-4 col-md-5 mt-2 mb-4">
                <a href=""
                   class="btn yellow-bg btn-block mb-3 text-white mitr-medium longer-btn shadow-effect button-shake montserrat-bold">TÌM
                    HIỂU
                    THÊM</a>
            </div>
        </div>
        <div class="sec2mb-homepage">
            <p class="headersec2-mb-HP montserrat-extrabold">GIỚI THIỆU VỀ</p>
            <p class="headersec2-mb2-HP montserrat-extrabold">Thầy Nino</p>
            <p class="contentsec2-mb-HP montserrat-medium">Thầy Nino tên thật là Nguyễn Hoài Nam, sinh ngày 09/11/1989. Thầy Nino đã tốt
                nghiệp TESOL học viện American Institute (Mỹ) và có kinh nghiệm trên 11 năm giảng dạy. Với sự trẻ trung,
                năng động, nhiệt huyết, thầy luôn đem lại cho học viên năng lượng tích cực và những giờ học thú vị.</p>
            <img src="{{asset('images/homepage/section5/Mask group (1).png')}}" class="imgsec2-mb-HP">
            <div class="col-xxl-4 col-md-5 mt-2 mb-4">
                <a href=""
                   class="btn yellow-bg btn-block mb-3 text-white mitr-medium longer-btn shadow-effect button-shake montserrat-bold">TÌM
                    HIỂU
                    THÊM</a>
            </div>
        </div>
    </div>
    <div class="courses">
        <div class="d-flex align-content-center justify-content-center img-course pt-4">
            <img src="{{asset('images/homepage/section-2/courses/courses.png')}}" alt="" style="" class="img-fluid">
        </div>
        <div class="slick-carousel position-relative mt-4">
            <button class="custom-prev-arrow-course " aria-label="Previous">
                <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class="shadow-effect button-shake"/>
            </button>
            <button class="custom-next-arrow-course " aria-label="Next">
                <img src="{{asset('images/arrow/right.png')}}" alt="Next" class="shadow-effect button-shake"/>
            </button>

            <div class="carousel-courses">
                @foreach($courses as $course)
                    <div class="d-flex justify-content-center">
                        <div class="card rounded-custom shadow-effect me-2 mb-2"
                             style="width:20rem; height: 70% ">
                            <div class="card-header blue-bg rounded-custom-top" style="height: 6rem">
                                <p class="height-text-card text-white font-size-custom text-center p-3 montserrat-black">
                                    <strong>{{\Illuminate\Support\Str::limit($course->title,60)}}</strong></p>
                            </div>
                            <div class="card-body">
                                <p class="card-text text-center montserrat-black">
                                    <strong>{{\Illuminate\Support\Str::limit($course->name,40)}}</strong></p>
                                <p class="card-text text-center montserrat-extrabold" style="height: 12rem">
                                    {{ preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($course->description), 150)) }}</p>
                                <div class="d-flex align-content-center justify-content-center ">
                                    <a href=""
                                       class="btn blue-bg text-white btn-sm mb-3  btn-long button-shake montserrat-black">XEM
                                        CHI TIẾT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex align-content-center justify-content-center">
            <a href=""
               class="btn yellow-bg btn-block mb-3 text-white mitr-medium longer-btn shadow-effect button-shake mulish-black">TÌM
                HIỂU
                THÊM</a>
        </div>


        <script>
            $(document).ready(function () {
                $('.carousel-courses').slick({
                    infinite: true,
                    speed: 900,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: true,
                    prevArrow: $('.custom-prev-arrow-course'),
                    nextArrow: $('.custom-next-arrow-course'),
                    variableWidth: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
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


    </div>
    <div class="hall-of-fame mt-3">
        <div class="d-flex align-content-center justify-content-center img-course mb-3">
            <img src="{{asset('images/homepage/section-2/hall-of-fame/hall-of-fame.png')}}" alt="" style=""
                 class="img-fluid">
        </div>
        <div class="slick-carousel position-relative mt-4">
            <button class="custom-prev-arrow-hall-of-fame" aria-label="Previous">
                <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class="shadow-effect button-shake"/>
            </button>
            <button class="custom-next-arrow-hall-of-fame" aria-label="Next">
                <img src="{{asset('images/arrow/right.png')}}" alt="Next" class="shadow-effect button-shake"/>
            </button>

            <div class="carousel-hall-of-fame">
                <div class="d-flex justify-content-center">
                    <div class="card rounded-custom me-1 border-0"
                         style="width:70%; height: 90vh">
                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-1/banner.png')}}"
                             alt="" style="height: 80%; object-fit: cover">
                        <div class="pt-4">
                            <p class="card-text mulish-semibold" style="text-align:justify">Thầy Nino luôn tự hào khi
                                chia sẻ những
                                thành công trong việc nỗ lực
                                học TOEIC của học viên tại Nino’s Classes. Các bạn đã chứng minh rằng với sự cố gắng
                                bền bỉ cùng với đam mê học tập và sự hướng dẫn tận tâm của thầy Nino và đội ngũ
                                giáo viên, mọi mục tiêu đề ra đều có thể đạt được.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card rounded-custom me-1 border-0"
                         style="width:70%; height: 90vh">
                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-1/test3.jpg')}}"
                             alt="" style="height: 80%; object-fit: cover">
                        <div class="pt-4">
                            <p class="card-text mulish-semibold">Những bạn học viên tại Nino’s Classes mới ngày nào có
                                số điểm kiểm tra đầu vào thấp, dường như kiến thức về Tiếng Anh là con số 0, nay đã
                                xuất sắc đạt được điểm số cao, vượt target mà họ đã đề ra. Với những khóa học chất
                                lượng và phương pháp giảng dạy độc đáo, thầy Nino và đội ngũ giáo viên đã cùng nhau
                                xây dựng nền tảng vững chắc, tạo điều kiện giúp học viên tại Nino’s Classes thành công
                                chinh phục kỳ thi TOEIC của IIG Việt Nam..</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card rounded-custom me-1 border-0"
                         style="width:70%; height: 90vh">
                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-1/test2.jpg')}}"
                             alt="" style="height: 80%; object-fit: cover">
                        <div class="pt-4">
                            <p class="card-text mulish-semibold">Sau mỗi khóa học, các bạn học viên của Nino’s Classes
                                không chỉ đạt được điểm cao mà còn có thể tự tin giao tiếp Tiếng Anh một cách tự nhiên.
                                Sứ mệnh của Nino’s Classes là giúp học viên không chỉ tập trung vào việc đạt điểm số cao
                                mà còn có thể phát triển một cách toàn diện về ngôn ngữ.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card rounded-custom me-1 border-0"
                         style="width:70%; height: 90vh">
                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-1/test.png')}}"
                             alt="" style="height: 80%; object-fit: cover">
                        <div class="pt-4">
                            <p class="card-text mulish-semibold">Trung tâm Thầy Nino TOEIC Nhí Nhố xin chân thành
                                chúc mừng những bạn học viên xuất sắc và hy vọng rằng những thành công của họ sẽ
                                tiếp thêm động lực cho tất cả mọi người trong hành trình học tập của mình tại
                                Nino’s Classes. From ZEROES to HEROES! Hãy cùng nhau bắt đầu một kỉ nguyên mới với
                                việc học tập Tiếng Anh không bao giờ buồn chán! Nino’s Classes - Học là thích –
                                Thích là mê - Phát âm cực chất - Điểm vượt mục tiêu!
                                .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('.carousel-hall-of-fame').slick({
                    infinite: true,
                    speed: 900,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    prevArrow: $('.custom-prev-arrow-hall-of-fame'),
                    nextArrow: $('.custom-next-arrow-hall-of-fame'),
                });
            });
        </script>

    </div>
    <div class="knowledge">
        <div class="d-flex align-content-center justify-content-center img-course">
            <img src="{{asset('images/homepage/section-2/courses/courses.png')}}" alt="" style="" class="img-fluid">
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
                        <div class="card rounded-custom-23 shadow-effect me-1"
                             style="width:20rem; height: 70% ">
                            <img class="rounded-custom m-3" src="{{$article->image}}"
                                 alt="Card image" style="height: 50%; object-fit: cover">
                            <div class="card-body">
                                <p class="height-text-card text-center mulish-black">{{\Illuminate\Support\Str::limit($article->title,60)}}</p>
                                <p class="card-text mulish-semibold ">{{ preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($article->content), 77)) }}</p>
                                <div class="d-flex align-content-center justify-content-center ">
                                    <a href=""
                                       class="btn blue-bg text-white btn-sm mb-3  btn-long button-shake mulish-black">XEM
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
               class="btn yellow-bg btn-block mb-3 text-white mitr-medium longer-btn shadow-test button-shake mulish-black">TÌM
                HIỂU
                THÊM</a>
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

    </div>
</div>
