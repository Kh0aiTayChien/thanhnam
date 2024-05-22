<div class="section-1 d-flex flex-column ">

    <div id="section-1-carousel"
         class="d-flex align-content-center justify-content-center carousel slide w-100 position-relative"
         data-bs-ride="carousel">
        <div class="d-flex align-content-center justify-content-center position-absolute"
             style="z-index: 998; bottom: 15vh">
            <a href="/gioi-thieu" class="btn btn-large bg-white blue-text mb-3 btn-long button-shake mulish-black py-2 "
               style="font-size: 20px"
            >GIỚI THIỆU</a>
        </div>
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
        <button class="carousel-control-prev" type="button" data-bs-target="#section-1-carousel" data-bs-slide="prev">
            <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class=" button-shake img-carousel-arrow"/>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#section-1-carousel" data-bs-slide="next">
            <img src="{{asset('images/arrow/right.png')}}" alt="Previous" class=" button-shake img-carousel-arrow"/>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row gx-0">
        <div class="col-3 d-flex justify-content-center align-content-center position-relative " style="height: 10vh">
            <div class=" position-absolute mulish-black text-white" style="top: 35%; font-size: 1rem;z-index: 1200">
               <div class="text-center">THIẾT KẾ KIẾN TRÚC</div>
            </div>
            <img src="{{asset('images/homepage/section-1/img1.png')}}" class="img-under">
            <div class="overlay"></div>
        </div>
        <div class="col-3 d-flex justify-content-center align-content-center position-relative " style="height: 10vh">
            <div class=" position-absolute mulish-black text-white" style="top: 35%; font-size: 1rem;z-index: 1200">
                THI CÔNG
            </div>
            <img src="{{asset('images/homepage/section-1/img2.png')}}" class="img-under">
        </div>
        <div class="col-3 d-flex justify-content-center align-content-center position-relative " style="height: 10vh">
            <div class=" position-absolute mulish-black text-white" style="top: 35%; font-size: 1rem;z-index: 1200">
                THI CÔNG NỘI THẤT
            </div>
            <img src="{{asset('images/homepage/section-1/img3.png')}}" class="img-under">
        </div>
        <div class="col-3 d-flex justify-content-center align-content-center position-relative " style="height: 10vh">
            <div class=" position-absolute mulish-black text-white" style="top: 35%; font-size: 1rem;z-index: 1200">
                <div class="text-center">THIẾT KẾ - THI CÔNG </div>
                <div class="text-center"> BỂ BƠI</div>
            </div>
            <img src="{{asset('images/homepage/section-1/img1.png')}}" class="img-under">
        </div>

    </div>
</div>
<style>
    .img-under {
        object-fit: cover;
        width: 100%;
        object-position: center;
        overflow: hidden;
        transition: 0.3s;
    }

   .img-under:hover {
        filter: grayscale(100%);
        cursor: pointer;
    }
</style>
