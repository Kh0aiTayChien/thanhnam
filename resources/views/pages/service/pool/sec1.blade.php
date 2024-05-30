<div class="justify-content-center">
    <div class="row-test banner-pools mb-5">
        <p class="" style="font-family: Mulish-ExtraBold, sans-serif; color: white; font-size: 30px">THIẾT KẾ - THI CÔNG
            BỂ BƠI</p>
    </div>
    @foreach($news as $article)
        <div class="content1-pools">
            <div class="text-pools">
                <p class="ms-5" style="font-size: 18px"><span style="font-weight: bold; font-size: 23px">Công trình:</span>
                    {{$article->title}} </p>
                <p class="ms-5"><span style="font-weight: bold">Chủ đầu tư:</span> {{$article->investor}}</p>
                <p class="ms-5"><span style="font-weight: bold">Địa điểm:</span> {{$article->location}}</p>
                <p class="ms-5"><span style="font-weight: bold">Quy mô:</span> {{$article->scale}}</p>
            </div>
            <div class="content p-5 pb-5" style="text-align: justify; align-items: center">
                {!! $article->content!!}
            </div>
        </div>

    @endforeach
</div>
<script>
    $(document).ready(function() {
        $('.content1-pools img').addClass('img-fluid');
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
