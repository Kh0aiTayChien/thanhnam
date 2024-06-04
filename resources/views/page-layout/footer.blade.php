<div class="footer ">
    <div class=" about text-white ">
        <div class="content row me-1 pt-5">
            <div class="col-lg-3 col-md-12 gx-0 d-none d-md-block">
                <img class="header-logo img-fluid pt-3" src="{{asset('images/footer/image 5 5.png')}}" alt="LOGO"
                     style="transform: scale(0.7) translateY(-35%); transform-origin: center;">

            </div>
            <div class="col-lg-3 col-md-12 gx-0 d-block d-md-none">
                <img class="header-logo img-fluid pt-3" src="{{asset('images/footer/image 5 5.png')}}" alt="LOGO"
                     style="transform: scale(0.7) translate(-15%, -35%); transform-origin: center;">

            </div>
            <div class="col-lg-4 col-md-12 transform-mobile" style="">
                <div class="">
                    <div class="row gx-0">
                        <div class="col-1"><img class=header-logo src="{{asset('images/footer/phone.png')}}" alt="phone"
                                                style="transform: scale(0.6) translateY(-35%); transform-origin: center;">
                        </div>
                        <div class="col-0-5"></div>
                        <div class="col-10">
                            <span class="">
                           098 886 5315 - 0913 442 882
                        </span>
                        </div>

                    </div>
                    <div class="">
                        <div class="row gx-0">
                            <div class="col-1">
                                <img class=header-logo src="{{asset('images/footer/mail.png')}}" alt="mail"
                                     style="transform: scale(0.6) translateY(-35%); transform-origin: center;">
                            </div>
                            <div class="col-0-5"></div>
                            <div class="col-10">
                                 <span class="">
                                    thanhnam8921@gmail.com
                                </span>
                            </div>

                        </div>
                    </div>
                    <div class="">
                        <div class="row gx-0">
                            <div class="col-1">
                                <img class=header-logo src="{{asset('images/footer/web.png')}}" alt="web"
                                     style="transform: scale(0.6) translateY(-35%); transform-origin: center;">
                            </div>
                            <div class="col-0-5"></div>
                            <div class="col-10">
                             <span class="">
                            www.fb.com/Thanhnam.Shome
                        </span>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="row gx-0">
                            <div class="col-1">
                                <img class=header-logo src="{{asset('images/footer/place.png')}}" alt="place"
                                     style=" transform: scale(0.6); transform-origin: center">
                            </div>
                            <div class="col-0-5"></div>
                            <div class="col-10">
                                 <span class="" style="">
                                     Số 1, 8th Ave, Sunrise H, The Manor Central Park, Hoàng Mai Hà Nội.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 ">
                <div class="title mt-1 push-right"><a href="{{asset('gioi-thieu')}}" style="text-decoration: none; color: white"> GIỚI THIỆU</a></div>
                <div class="title mt-2 push-right"><a href="{{asset('tin-tuc')}}" style="text-decoration: none; color: white"> TIN TỨC</a></div>
                <div class="title mt-2 push-right">LIÊN HỆ</div>
            </div>
            <div class="col-lg-3 col-md-12 mb-5">
{{--                <div class="title mt-1 push-right">DỊCH VỤ</div>--}}
                <div class=" push-right"><a href="{{asset('thiet-ke-kien-truc')}}" style="text-decoration: none; color: white"> THIẾT KẾ KIẾN TRÚC</a></div>
                <div class="mt-2 push-right"><a href="{{asset('thi-cong-cong-trinh')}}" style="text-decoration: none; color: white"> THI CÔNG CÔNG TRÌNH</a></div>
                <div class="mt-2 push-right"><a href="{{asset('thi-cong-noi-that')}}" style="text-decoration: none; color: white"> THI CÔNG NỘI THẤT</a></div>
                <div class="mt-2 push-right"><a href="{{asset('fpt-smart-home')}}" style="text-decoration: none; color: white"> FPT SMART HOME</a></div>
                <div class="mt-2 mb-4 push-right"><a href="{{asset('vimar')}}" style="text-decoration: none; color: white"> VIMAR</a></div>
{{--                <div class="mt-2 push-right">Thi công bể bơi</div>--}}
            </div>
        </div>
    </div>
    <div class="mobile-copyright d-flex d-md-none justify-content-center align-items-center">
        <div class="text-center" style="; color: #105181 !important">
            Bản quyền {{ now()->year}} © Thanh Nam <br>
            Đã đăng ký bản quyền.
        </div>
    </div>
    <div class="copyright d-none d-md-flex justify-content-start align-items-center">
        <div class="text-center" style="margin-left: 10rem; color: #105181 !important">
            Bản quyền {{ now()->year}}© Thanh Nam. Đã đăng ký bản quyền.
        </div>
    </div>
</div>
<style>
    .col-0-5 {
        flex: 0 0 4.16667%; /* 0.5 of 1/12 which is ~4.16667% */
        max-width: 4.16667%;
    }
    .footer .content{
        margin-top: unset;
    }
    .push-right{
        margin-left: unset;
    }
    @media only screen and (max-width: 800px) {
        .transform-mobile {
            transform: translateY(-10%)
        }
        .footer .content{
            margin-top: 3%
        }
        .push-right{
            margin-left: 0.5rem;
        }
    }
</style>
