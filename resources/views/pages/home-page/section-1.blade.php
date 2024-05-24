<div class="section-1 d-flex flex-column position-relative">
    <div id="section-1-carousel"
         class="d-flex align-content-center justify-content-center carousel slide w-100 position-relative"
         data-bs-ride="carousel">
        <div class="d-flex align-content-center justify-content-center position-absolute"style="z-index: 200; bottom: 33vh; margin: 0 20vh">

            <div class="btn text-white montserrat d-none d-md-block text-center"
                 style="font-size: 29px; text-align: justify; ">
                <div style="font-size: 48px; font-family: Mulish-ExtraBold" class="mb-3">Công ty CP Tư Vấn Xây Dựng THÀNH NAM</div>
                <p> Chúng tôi đặt mục tiêu chất lượng lên hàng đầu, từ đó xây dựng niềm tin bền vững nơi khách hàng
                    và đối tác. Công ty TNHH kỹ thuật và thương mại Thành Nam mong muốn chở thành đối tác với các
                    doanh nghiệp, Chủ đầu tư và khách hàng để cùng phát triển đi đến thành công!</p>
            </div>
            <div class="btn text-white montserrat d-block d-md-none px-3 " style="font-size: 16px; text-align: justify; margin-bottom: 25%">
                <div style="font-size: 15px; font-family: Mulish-ExtraBold" class="mb-5">Công ty CP Tư Vấn Xây Dựng THÀNH NAM</div>
                <p> Chúng tôi đặt mục tiêu chất lượng lên hàng đầu, từ đó xây dựng niềm tin bền vững nơi khách hàng
                    và đối tác. Công ty TNHH kỹ thuật và thương mại Thành Nam mong muốn chở thành đối tác với các
                    doanh nghiệp, Chủ đầu tư và khách hàng để cùng phát triển đi đến thành công!</p>
            </div>
        </div>
        <div class="d-flex align-content-center justify-content-center position-absolute"
             style="z-index: 998; bottom: 15vh">
            <a href="/gioi-thieu" class="btn btn-large bg-white blue-text mb-3 btn-long button-shake mulish-black py-2 "
               style="font-size: 20px"
            >NHẬN TƯ VẤN NGAY</a>
        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#section-1-carousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#section-1-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#section-1-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/homepage/section-1/44.png')}}" class="img-slide img-fluid" alt="img-slide-1">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/homepage/section-1/45.png')}}" class="img-slide img-fluid" alt="img-slide-2">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/homepage/section-1/46.png')}}" class="img-slide img-fluid" alt="img-slide-3">
            </div>
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
