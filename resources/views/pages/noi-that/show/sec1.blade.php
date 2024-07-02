<div class=" content-article ">
    <div class="justify-content-center align-content-center mt-4 d-none d-md-flex">
        <img src="{{$article->image}}" alt="" style="width: 62.5vw;
        margin-bottom: 2rem; " class="img-fluid">
    </div>
    <div class="d-flex justify-content-center align-content-center mt-4 d-md-none">
        <img src="{{$article->image}}" alt="" style=" scale: 100%;
        margin-bottom: 2rem; " class="img-fluid">
    </div>
    <h2 align="center" class="tilte-text">{{$article->title}}</h2>
    <div class="d-flex justify-content-center align-content-center">
        <p class="datetime_text p-2 text-center pb-3"> Ngày đăng: {{ \Carbon\Carbon::parse($article->created_at)->format('d-m-Y H:i:s') }} </p>
    </div>

    <div class="content p-3 pb-5">
        {!! $article->content!!}
    </div>
    <div class="d-flex align-content-center justify-content-start">

        <a href="{{route('homepage.articles_noi_that')}}"
           class="btn  btn-block mb-3 rounded-pill border-1 monte-semibold super-long button-shake">
           <span>
            <svg xmlns="http://www.w3.org/2000/svg" height="1.1em" viewBox="0 0 448 512">
                <style>svg {
                        fill: lightslategrey
                    }</style><path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
            </span>
            <span>XEM THÊM BÀI VIẾT</span>
        </a>
    </div>
</div>
<style>
    body{
    }
    .monte-semibold {
        font-family: Montserrat-Bold, sans-serif;
        font-size: 15px;
        text-align: center;
        color: lightslategrey;
        border-color: lightslategrey;
    }
    .monte-semibold:hover{
        color: lightslategrey !important;
    }

    .datetime_text{
        font-family: "Montserrat-Medium", sans-serif;
        color: grey;
    }
    .content-article {
        margin: 1rem 20rem 5rem 20rem;
        background-color: white;
    }
    .tilte-text {
        color: #105181;
        font-family: "Montserrat-Bold", sans-serif;
    }
    .figure-image {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media only screen and (max-width: 1300px) {
        .content-article {
            margin: 3rem 10rem 10rem 10rem ;
        }
    }
    @media only screen and (max-width: 1000px) {
        .content-article {
            margin: 3rem 5rem 10rem 5rem;
        }
    }

    @media only screen and (max-width: 800px) {
        .content-article {
            margin: 3rem 1rem 3rem 1rem;
        }
        .tilte-text {
            color: #105181;
            font-family: "Montserrat Bold", sans-serif;
            margin-bottom: 1rem;
            font-weight: bolder;
        }
    }
</style>
<style>
    /* Thiết lập chiều cao mặc định là 685vh cho PC */
    .content iframe {
        width: 100%;
        height: 80vh;
    }

    /* Sử dụng media query để thay đổi chiều cao thành 185vh cho mobile */
    @media (max-width: 767px) {
        .content iframe {
            height: 30vh;
        }
    }
</style>
<script>
    $(document).ready(function() {
        $('.content-article img').addClass('img-fluid');
        $('.image ').addClass('figure-image ');
        // Tìm tất cả thẻ <oembed> và chuyển đổi thành thẻ <iframe>
        $('oembed').each(function () {
            var url = $(this).attr('url');
            var iframe = $('<iframe>').attr({
                'src': url,
                'width': '100%', // Đặt chiều rộng là 100%
            });
            $(this).replaceWith(iframe);
        });
    });
</script>
