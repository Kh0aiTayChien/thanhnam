<div class="justify-content-center">
    <div class="row-test banner-pools">
        <p class="" style="font-family: Mulish-ExtraBold, sans-serif; color: white; font-size: 30px">THIẾT KẾ KIẾN TRÚC</p>
    </div>
    @foreach($news as $article)
        <div class="content1-pools">
            <div class="text-pools">
                <p class="" style="font-size: 18px"><span style="font-weight: bold; font-size: 23px">CÔNG TRÌNH:</span>
                    {{$article->title}} </p>
                <p class=""><span style="font-weight: bold">CHỦ ĐẦU TƯ:</span> {{$article->investor}}</p>
                <p class=""><span style="font-weight: bold">ĐỊA ĐIỂM:</span> {{$article->location}}</p>
                <p class=""><span style="font-weight: bold">QUY MÔ:</span> {{$article->scale}}</p>
            </div>
            <div class="content p-5 pb-5">
                {!! $article->content!!}
            </div>
        </div>
    @endforeach
</div>
<style>
    @media only screen and (max-width: 800px) {
        .content1-pools {
            padding-top: 3%;
            background-color: #F3F3F3;
            display: block;
            width: 70%;
            margin-left: 15%;
            border-radius: 23px;
            padding-bottom: 3%;
            margin-bottom: 5%;
        }
    }
</style>
<script>
    $(document).ready(function() {
        $('.content1-pools img').addClass('img-fluid');
        $('img').addClass('img-fluid');
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
