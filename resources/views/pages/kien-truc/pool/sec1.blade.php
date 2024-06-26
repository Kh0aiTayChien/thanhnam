<div class=" sec-read justify-content-center">
    <div class="row-test banner-pools">
        <p class="" style="font-family: Mulish-ExtraBold, sans-serif; color: white; font-size: 30px">THIẾT KẾ KIẾN
            TRÚC</p>
    </div>
    @foreach($news as $article)
        <div class="content1-pools">
            <div class="text-pools">
                <p class=""><span style="font-weight: bold">Công trình:</span> {{$article->title}}</p>
                <p class=""><span style="font-weight: bold">Chủ đầu tư:</span> {{$article->investor}}</p>
                <p class=""><span style="font-weight: bold">Địa điểm:</span> {{$article->location}}</p>
                <p class=""><span style="font-weight: bold">Quy mô:</span> {{$article->scale}}</p>
            </div>
            <div class="content pb-5" style="text-align: justify; align-items: center">
                {!! $article->content!!}
            </div>
        </div>

    @endforeach
    <div class="d-flex justify-content-center align-content-center mt-3 mb-3">
        {{ $news->links() }}
    </div>
</div>
<style>
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .pagination .page-item {
        margin: 0 5px;
    }

    .pagination .page-item .page-link {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        border-radius: 5px;
        background-color: #fff;
        border: 3px solid #105181;
        color: #105181;
        text-decoration: none;
        transition: background-color 0.3s, color 0.3s;
    }

    .pagination .page-item .page-link:hover {
        background-color: #105181;
        color: #fff;
    }

    .pagination .page-item.active .page-link {
        background-color: #105181;
        color: #fff;
        border: 3px solid #105181;
    }

    .pagination .page-item.disabled .page-link {
        background-color: #f5f5f5;
        color: #6c757d;
        border: 1px solid #ddd;
        cursor: not-allowed;
    }
</style>
<script>
    $(document).ready(function () {
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
