
<div class="section-build d-flex flex-column mt-5">
    <div class="d-flex justify-content-center align-content-center mb-4">
        <img src="{{asset('images/homepage/sec-build/title.png')}}" alt="">
    </div>

{{--    <div class="tabs-4">--}}
{{--        <ul class="tabs  toggle_display">--}}
{{--            <li class=""><a href="#tab15">Copyright</a></li>--}}
{{--            <li class="active"><a href="#tab16">Contact</a></li>--}}
{{--        </ul>--}}
{{--        <section class="tab_content_wrapper toggle_border" style="height: 109px;">--}}
{{--            <a class="accordion_tabs" href="#tab15">Copyright</a>--}}
{{--            <article class="tab_content toggle_position toggle_display slideUpOut" id="tab15" style="z-index: 2;">--}}
{{--123--}}z
{{--            </article>--}}
{{--            <a class="accordion_tabs active" href="#tab16">Contact</a>--}}
{{--            <article class="tab_content toggle_position toggle_display slideUpIn" id="tab16" style="z-index: 5;">--}}
{{--               1233124--}}
{{--            </article>--}}
{{--        </section>--}}
{{--    </div>--}}

    <div id="section-build-carousel"
         class="d-flex align-content-center justify-content-center carousel slide w-100 position-relative"
         data-bs-ride="carousel">

        <div class="carousel-indicators">
            @foreach($images as $key => $image)
                <button type="button" data-bs-target="#section-1-carousel"
                        data-bs-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : ''}}"
                        aria-label="Slide {{$key + 1}}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach($images as $key => $image)
                <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                    <img src="{{$image->image_url}}" class="img-slide" alt="img-slide">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#section-build-carousel" data-bs-slide="prev">
            <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class=" button-shake img-carousel-arrow"/>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#section-build-carousel" data-bs-slide="next">
            <img src="{{asset('images/arrow/right.png')}}" alt="Previous" class=" button-shake img-carousel-arrow"/>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="d-flex align-content-center justify-content-center pt-5 pb-5">
        <a href=""
           class="btn blue-bg blue-text btn-block mb-3 text-white mitr-medium longer-btn shadow-test button-shake mulish-black">XEM THÊM</a>
    </div>
</div>

<script src="{{asset('js/jQueryTab.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/jquerytab/animation.css')}}" />
<link rel="stylesheet" href="{{asset('css/jquerytab/jQueryTab.css')}}" />

<script>
    // $(document).ready(function (){
    //     $('.tabs-4').jQueryTab({
    //         openOnhover: true,
    //         collapsible:false,
    //         initialTab: 4,
    //         tabInTransition: 'slideUpIn',
    //         tabOutTransition: 'slideUpOut',
    //         cookieName: 'active-tab-4'
    //
    //     });
    // });
</script>
