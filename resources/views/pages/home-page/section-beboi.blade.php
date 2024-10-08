<div class="be-boi">

    <div class="d-none d-md-flex justify-content-center align-content-center  px-4">
        <img src="{{asset('images/homepage/be-boi/title.png')}}" alt="" class="img-fluid" style="scale: 100%" >
    </div>
    <div class="d-flex d-md-none justify-content-center align-content-center px-4">
        <img src="{{asset('images/homepage/be-boi/title.png')}}" alt="" class="img-fluid" style="scale: 75%">
    </div>

    <div class="row gx-3 gy-3 padding-mobile mt-4">
        <div class="col-lg-3 col-6  d-flex justify-content-center align-content-center position-relative " style="">
            <img src="{{asset('images/homepage/be-boi/1.png')}}" class="img-fluid" data-aos="fade-up" data-aos-duration="1500">
        </div>
        <div class="col-lg-3 col-6 d-flex justify-content-center align-content-center position-relative " style="">
{{--            <div class=" position-absolute montserrat-bold text-white " style="top: 65%; font-size: 1.5rem;z-index: 1200">--}}
{{--            </div>--}}
            <img src="{{asset('images/homepage/be-boi/2.png')}}" class="img-fluid" data-aos="fade-up" data-aos-duration="1500">
        </div>
        <div class="col-lg-3 col-6 d-flex justify-content-center align-content-center position-relative " style="">
{{--            <div class=" position-absolute montserrat-bold text-white" style="top: 65%; font-size: 1.5rem;z-index: 1200">--}}
{{--            </div>--}}
            <img src="{{asset('images/homepage/be-boi/3.png')}}" class="img-fluid" data-aos="fade-up" data-aos-duration="1500">
        </div>
        <div class="col-lg-3 col-6 d-flex justify-content-center align-content-center position-relative " style="">
            <img src="{{asset('images/homepage/be-boi/4.png')}}" class="img-fluid" data-aos="fade-up" data-aos-duration="1500">
        </div>
    </div>
   <div class="container pt-5 pb-2 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-4 offset-md-2 d-flex justify-content-center mb-3 mb-md-0" >
            <a href="{{asset('fpt-smart-home')}}"
               class="btn blue-bg blue-text btn-block text-white mitr-medium longer-btn shadow-test button-shake montserrat-bold">FPT SMART HOME</a>
        </div>
        <div class="col-md-4 d-flex justify-content-center" >
            <a href="{{asset('vimar')}}"
               class="btn blue-bg blue-text btn-block text-white mitr-medium longer-btn shadow-test button-shake montserrat-bold">VIMAR</a>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</div>
<style>
    .be-boi .col-3 {
        aspect-ratio: 1/1.3;
    }
    .text-build{

    }
    .img-beboi {
        object-fit: cover;
        width: 100%;
        object-position: center;
        overflow: hidden;
        filter: grayscale(100%);
    }

    .img-beboi:hover {
        filter: unset;
        cursor: pointer;
    }
    .padding-mobile {
        padding: 0 2vh;
    }
    @media only screen and (min-width: 800px) {
        .padding-mobile {
            padding: 0 32vh
        }
    }
</style>
<script>
    $(document).ready(function() {

        $('.img-beboi').on('mousemove', function() {
            $(this).prev().find('.text-build').removeClass('d-none');
            console.log(1);
        });

        $('.img-beboi').on('mouseleave', function() {
            $(this).prev().find('.text-build').addClass('d-none');
        });

    });

</script>
</div>
