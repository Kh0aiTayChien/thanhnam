<div class="secp-TT mb-5">
    <div class="row-test banner-pools">
        <p class="" style="font-family: Mulish-ExtraBold, sans-serif; color: white; font-size: 30px">TIN TỨC</p>
    </div>
    @foreach($news as $article)
        <div class="mt-5 row-test">
            <div class="row-test col-lg-7 col-md-8 bg-news">
                <div class="col-lg-4 col-xs-12 padding-mobile" style="">
                    <a href="{{route('homepage.show',['slug' => $article->slug])}}" style="">
                        <img class="img-fluid border-red"
                             src="{{$article->image}}" style="object-fit: cover; height: 12rem; width: 16rem"/>
                    </a>
                </div>
                <div class="card-body col-lg-7 col-xs-12" style="padding-left: 5%">
                    <a href="{{route('homepage.show',['slug' => $article->slug])}}"
                       style="text-decoration: unset; color: unset">
                        <p class="textdatetime p-2 mulish-extrabold" style="color: #979797"><img
                                src="{{asset('images/news/CALENDAR-days.png')}}"
                                class="imgdatetime" style="transform: translateX(-50%)">{{ \Carbon\Carbon::parse($article->created_at)->format('d-m-Y H:i:s') }}</p>

                        <div class="blue-text"><h4
                                class="card-title h5 h4-sm titlenews mulish-black">{{\Illuminate\Support\Str::limit($article->title,77)}}</h4>
                        </div>
                        <p class="card-text titletext col-10 mulish-semibold"
                           style="text-align: justify; color: #313131">
                            {{ \Illuminate\Support\Str::limit(preg_replace('/\xA0|&nbsp;|\s+/u', ' ', strip_tags($article->content)), 200) }}</p><br>
                        <p class="blue-text mulish-black" style="text-decoration: underline">XEM THÊM</p>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
    <div class="d-flex justify-content-center align-content-center mt-3 mb-3">
        {{ $news->links() }}
    </div>
</div>

<style>
    .bg-news {
        background-color: white;
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.25);
        border-radius: 23px;
        padding-bottom: 1%;
        overflow: hidden;
    }
    .padding-mobile{
        padding: 3%
    }
    @media only screen and (max-width: 800px) {
        .secp-TT {
            padding: 0 5%;
        }
        .padding-mobile{
            padding: unset;
            margin-top: 8%;
        }
    }

    .green-border {
        border: 2px solid #59843d;
    }

    .btn-long {
        width: 200px;
    }

    .btn-long:hover {
        color: #F79421;
    }

    .height-img-card {
        object-fit: cover;
        width: 404px;
        border-radius: 23px;
        max-width: 100%;
        max-height: 100%;
    }

    .pagination {
        list-style-type: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .pagination li a,
    .pagination li span {
        display: inline-block;
        padding: 8px 12px;
        color: #105181;
        font-family: Mitr-Medium, sans-serif;
        background-color: #ffffff;
        border: 1px solid #105181;
    }

    .page-item.active .page-link {
        background-color: #105181;
        border-color: #105181;
    }

    .border-radius {
        border-radius: 23px;
    }

    .green-text {
        color: #59843d;
    }
</style>
