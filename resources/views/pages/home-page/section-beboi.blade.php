<div class="be-boi">

    <div class="d-flex justify-content-center align-content-center mb-4 px-4">
        <img src="{{asset('images/homepage/be-boi/title.png')}}" alt="" class="img-fluid">
    </div>

    <div class="row gx-3 gy-3 ">
        <div class="col-lg-2 col-md-1 d-flex justify-content-center align-content-center position-relative " style="">
        </div>
        <div class="col-lg-4 col-md-4 d-flex justify-content-center align-content-center position-relative " style="">
{{--            <div class=" position-absolute mulish-black text-white " style="top: 65%; font-size: 1.5rem;z-index: 1200">--}}
{{--            </div>--}}
            <img src="{{asset('images/homepage/be-boi/1.png')}}" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-4 d-flex justify-content-center align-content-center position-relative " style="">
{{--            <div class=" position-absolute mulish-black text-white" style="top: 65%; font-size: 1.5rem;z-index: 1200">--}}
{{--            </div>--}}
            <img src="{{asset('images/homepage/be-boi/2.png')}}" class="img-fluid">
        </div>
        <div class="col-lg-2 col-md-1 d-flex justify-content-center align-content-center position-relative " style="">
        </div>
    </div>
    <div class="d-flex align-content-center justify-content-center pt-5 pb-5">
        <a href=""
           class="btn blue-bg blue-text btn-block mb-3 text-white mitr-medium longer-btn shadow-test button-shake mulish-black">XEM THÊM</a>
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
