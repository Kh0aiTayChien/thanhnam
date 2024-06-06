
<div class="section-build d-flex flex-column mt-5" >
    <div class=" justify-content-center align-content-center d-none d-md-flex" >
        <img src="{{asset('images/homepage/sec-build/title.png')}}" alt="" style="">
    </div>
    <div class=" justify-content-center align-content-center d-flex d-md-none">
        <img src="{{asset('images/homepage/sec-build/title.png')}}" alt="" style="scale: 67.5%">
    </div>

    <div class="section-6  pb-5 " >

        <div class="mt-4 mb-4" >
            <div class="row px-5  mb-3 gx-0 gy-2">
                <div class="col-md-3 col-xs-0"></div>
                <div class="col-md-3  d-flex justify-content-center align-content-center ">
                    <button class="tab-button btn btn-block blue-border-bottom
                                  button-shake active"
                            data-target="tab1" style="width: 100%" >
                        <div class=" " style="font-size: 16px; font-family: Montserrat-Bold">THI CÔNG CÔNG TRÌNH</div>
                    </button>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-content-center">
                    <button class="tab-button btn  btn-block  blue-border-bottom
                                  button-shake"
                            data-target="tab2" style="width: 100%" >
                        <div class="  " style="font-size: 16px; font-family: Montserrat-Bold">THI CÔNG NỘI THẤT</div>
                    </button>
                </div>
{{--                <div class="col-md-2 d-flex justify-content-center align-content-center">--}}
{{--                    <button class="tab-button btn  btn-block  blue-border-bottom--}}
{{--                                 text-white  Montserrat-Bold button-shake"--}}
{{--                            data-target="tab3" style="width: 100%">--}}
{{--                        <div class=" font-size-custom" style="font-size: 13px">{{ __('homepage/section6.subTitleSlide3')}}</div>--}}
{{--                    </button>--}}
{{--                </div>--}}
            </div>
        </div>

        <div class=" tabs pb-3 px-5">

            <div class="row tab tab1  gy-4 gx-0 mobile-padding active" style="" data-aos="fade-up" data-aos-duration="1500">
                <div class="section-tab d-flex justify-content-center align-items-center ">
                    <div id="section-tab1-carousel" class="carousel slide w-100" data-bs-ride="carousel"
                         data-bs-interval="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#section-tab1-carousel" data-bs-slide-to="0"
                                    class="active" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#section-tab1-carousel" data-bs-slide-to="1" class=""
                                    aria-label="Slide 2" aria-current="true"></button>
                            <button type="button" data-bs-target="#section-tab1-carousel" data-bs-slide-to="2" class=""
                                    aria-label="Slide 3" aria-current="true"></button>
                            <button type="button" data-bs-target="#section-tab1-carousel" data-bs-slide-to="3" class=""
                                    aria-label="Slide 4" aria-current="true"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('images/homepage/sec-build/tcct/1.png')}}" class="img-slide h-100"
                                     alt="img-slide img-fluid">
                            </div>
                            <div class="carousel-item ">
                                <img src="{{asset('images/homepage/sec-build/tcct/2.png')}}" class="img-slide h-100"
                                     alt="img-slide img-fluid">
                            </div>
                            <div class="carousel-item ">
                                <img src="{{asset('images/homepage/sec-build/tcct/3.png')}}" class="img-slide  h-100"
                                     alt="img-slide img-fluid">
                            </div>
                            <div class="carousel-item ">
                                <img src="{{asset('images/homepage/sec-build/tcct/4.png')}}" class="img-slide h-100"
                                     alt="img-slide ">
                            </div>
                        </div>
                        <button class="carousel-control-prev mobile-space-prev" type="button" data-bs-target="#section-tab1-carousel"
                                data-bs-slide="prev">
                            <img src="{{asset('images/arrow/blue-left.png')}}" alt="Previous"
                                 class="button-shake img-carousel-arrow" style="opacity: 30%">
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next mobile-space-next" type="button" data-bs-target="#section-tab1-carousel"
                                data-bs-slide="next">
                            <img src="{{asset('images/arrow/blue-right.png')}}" alt="Next"
                                 class="button-shake img-carousel-arrow" style="opacity: 30%">
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="d-flex align-content-center justify-content-center pt-5 pb-2" >
                    <a href="{{asset('thi-cong-cong-trinh')}}"
                       class="btn blue-bg blue-text btn-block mb-3 text-white mitr-medium longer-btn shadow-test button-shake montserrat-bold">THI CÔNG CÔNG TRÌNH</a>
                </div>
            </div>

            <div class="row tab tab2  gy-4 gx-0 mobile-padding" style="" data-aos="fade-up" data-aos-duration="1500">
                <div class="section-tab d-flex justify-content-center align-items-center">
                    <div id="section-tab2-carousel" class="carousel slide w-100" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#section-tab2-carousel" data-bs-slide-to="0"
                                    class="active" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#section-tab2-carousel" data-bs-slide-to="1" class=""
                                    aria-label="Slide 2" aria-current="true"></button>
                            <button type="button" data-bs-target="#section-tab2-carousel" data-bs-slide-to="2" class=""
                                    aria-label="Slide 3" aria-current="true"></button>
                            <button type="button" data-bs-target="#section-tab2-carousel" data-bs-slide-to="3" class=""
                                    aria-label="Slide 4" aria-current="true"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('images/homepage/sec-build/tcnt/1.png')}}" class="img-slide h-100"
                                     alt="img-slide">
                            </div>
                            <div class="carousel-item ">
                                <img src="{{asset('images/homepage/sec-build/tcnt/2.png')}}" class="img-slide h-100"
                                     alt="img-slide">
                            </div>
                            <div class="carousel-item ">
                                <img src="{{asset('images/homepage/sec-build/tcnt/3.png')}}" class="img-slide h-100"
                                     alt="img-slide">
                            </div>
                            <div class="carousel-item ">
                                <img src="{{asset('images/homepage/sec-build/tcnt/4.png')}}" class="img-slide h-100"
                                     alt="img-slide">
                            </div>
                        </div>
                        <button class="carousel-control-prev mobile-space-prev" type="button" data-bs-target="#section-tab2-carousel"
                                data-bs-slide="prev">
                            <img src="{{asset('images/arrow/blue-left.png')}}" alt="Previous"
                                 class="button-shake img-carousel-arrow" style="opacity: 30%">
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next mobile-space-next" type="button" data-bs-target="#section-tab2-carousel"
                                data-bs-slide="next">
                            <img src="{{asset('images/arrow/blue-right.png')}}" alt="Next"
                                 class="button-shake img-carousel-arrow" style="opacity: 30%">
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="d-flex align-content-center justify-content-center pt-5 pb-2">
                    <a href="{{asset('thi-cong-noi-that')}}"
                       class="btn blue-bg blue-text btn-block mb-3 text-white mitr-medium longer-btn shadow-test button-shake montserrat-bold">THI CÔNG NỘI THẤT</a>
                </div>
            </div>


{{--            <div class="row tab tab3  mt-5 gy-4 gx-0 " style="">--}}
{{--                <div class="section-tab d-flex justify-content-center align-items-center">--}}
{{--                    <div id="section-tab3-carousel" class="carousel slide w-100" data-bs-ride="carousel">--}}
{{--                        <div class="carousel-indicators">--}}
{{--                            <button type="button" data-bs-target="#section-tab3-carousel" data-bs-slide-to="0"--}}
{{--                                    class="active" aria-label="Slide 1"></button>--}}
{{--                            <button type="button" data-bs-target="#section-tab3-carousel" data-bs-slide-to="1" class=""--}}
{{--                                    aria-label="Slide 2" aria-current="true"></button>--}}
{{--                            <button type="button" data-bs-target="#section-tab3-carousel" data-bs-slide-to="2" class=""--}}
{{--                                    aria-label="Slide 3" aria-current="true"></button>--}}
{{--                            <button type="button" data-bs-target="#section-tab3-carousel" data-bs-slide-to="3" class=""--}}
{{--                                    aria-label="Slide 4" aria-current="true"></button>--}}
{{--                            <button type="button" data-bs-target="#section-tab3-carousel" data-bs-slide-to="4" class=""--}}
{{--                                    aria-label="Slide 5" aria-current="true"></button>--}}
{{--                            <button type="button" data-bs-target="#section-tab3-carousel" data-bs-slide-to="5" class=""--}}
{{--                                    aria-label="Slide 6" aria-current="true"></button>--}}
{{--                            <button type="button" data-bs-target="#section-tab3-carousel" data-bs-slide-to="6" class=""--}}
{{--                                    aria-label="Slide 7" aria-current="true"></button>--}}
{{--                            <button type="button" data-bs-target="#section-tab3-carousel" data-bs-slide-to="7" class=""--}}
{{--                                    aria-label="Slide 8" aria-current="true"></button>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-inner">--}}
{{--                            <div class="carousel-item active">--}}
{{--                                <img src="{{asset('images/homepage/section-6/3-phong-ngu/1.png')}}" class="img-slide h-100"--}}
{{--                                     alt="img-slide">--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item ">--}}
{{--                                <img src="{{asset('images/homepage/section-6/3-phong-ngu/2.png')}}" class="img-slide h-100"--}}
{{--                                     alt="img-slide">--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item ">--}}
{{--                                <img src="{{asset('images/homepage/section-6/3-phong-ngu/3.png')}}" class="img-slide h-100"--}}
{{--                                     alt="img-slide">--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item ">--}}
{{--                                <img src="{{asset('images/homepage/section-6/3-phong-ngu/4.png')}}" class="img-slide h-100"--}}
{{--                                     alt="img-slide">--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item ">--}}
{{--                                <img src="{{asset('images/homepage/section-6/3-phong-ngu/5.png')}}" class="img-slide h-100"--}}
{{--                                     alt="img-slide">--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item ">--}}
{{--                                <img src="{{asset('images/homepage/section-6/3-phong-ngu/6.png')}}" class="img-slide h-100"--}}
{{--                                     alt="img-slide">--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item ">--}}
{{--                                <img src="{{asset('images/homepage/section-6/3-phong-ngu/7.png')}}" class="img-slide h-100"--}}
{{--                                     alt="img-slide">--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item ">--}}
{{--                                <img src="{{asset('images/homepage/section-6/3-phong-ngu/8.png')}}" class="img-slide h-100"--}}
{{--                                     alt="img-slide">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <button class="carousel-control-prev mobile-space-prev" type="button" data-bs-target="#section-tab3-carousel"--}}
{{--                                data-bs-slide="prev">--}}
{{--                            <img src="{{asset('images/button/left.png')}}" alt="Previous"--}}
{{--                                 class="button-shake img-carousel-arrow">--}}
{{--                            <span class="visually-hidden">Previous</span>--}}
{{--                        </button>--}}
{{--                        <button class="carousel-control-next mobile-space-next" type="button" data-bs-target="#section-tab3-carousel"--}}
{{--                                data-bs-slide="next">--}}
{{--                            <img src="{{asset('images/button/right.png')}}" alt="Next"--}}
{{--                                 class="button-shake img-carousel-arrow">--}}
{{--                            <span class="visually-hidden">Next</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>


    </div>
    <style>
        .tab-button.active {
            background-color: #105181;
            color: white !important;
        }

        .tab-button {
            color: #105181; !important;
        }

        .tabs .tab {
            display: none;
        }

        .tabs .tab.active {
            display: flex;
        }

        .blue-border-bottom {
            border-bottom: 2px solid #105181;
            cursor: pointer;
            border-radius: unset;
        }

        .btn.focus, .btn:focus {
            outline: 0;
            box-shadow: none !important;
        }
        .section-build img{
            border-radius: 23px;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('.tab-button').click(function () {
                var target = $(this).data('target');

                $('.tab-button').removeClass('active');
                $(this).addClass('active');

                $('.tab').removeClass('active');
                $('.' + target).addClass('active');
            });
        });
    </script>
    <style>
        .mobile-padding{
            padding: 0 17.5rem
        }
        @media screen and (max-width: 800px){
            .mobile-space-prev{
                left: -15% !important;
            }
            .mobile-space-next{
                right: -15% !important;
            }
            .mobile-padding{
                padding: unset
            }
        }

    </style>

