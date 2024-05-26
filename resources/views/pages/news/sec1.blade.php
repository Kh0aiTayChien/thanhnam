<div class="secp-TT mb-5">
    <div class="row-test banner-pools">
        <p class="" style="font-family: Mulish-ExtraBold, sans-serif; color: white; font-size: 30px">TIN TỨC</p>
    </div>
    @foreach($news as $article)
        <div class="mt-5 row-test">
            <div class="row-test col-7 bg-news">
                <div class="col-lg-4 col-xs-12" style="margin-left: 4%">
                    <a href="{{route('homepage.show',['slug' => $article->slug])}}" style="">
                        <img class="img-fluid"
                             src="{{$article->image}}"/>
                    </a>
                </div>
                <div class="card-body col-lg-7 col-xs-12" style="padding-left: 5%">
                    <a href="{{route('homepage.show',['slug' => $article->slug])}}"
                       style="text-decoration: unset; color: unset">
                        <p class="textdatetime p-2 mulish-extrabold" style="color: #979797"><img
                                src="{{asset('images/news/CALENDAR-days.png')}}"
                                class="imgdatetime" style="transform: translateX(-50%)">{{$article->created_at}}</p>

                        <div class="blue-text"><h4
                                class="card-title h5 h4-sm titlenews mulish-black">{{\Illuminate\Support\Str::limit($article->title,77)}}</h4>
                        </div>
                        <p class="card-text titletext col-10 mulish-semibold"
                           style="text-align: justify; color: #313131">
                            {{ preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($article->content), 200)) }}</p><br>
                        <p class="blue-text mulish-black" style="text-decoration: underline">XEM THÊM</p>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<style>
    .bg-news {
        background-color: white;
        box-shadow: 4px 4px 0px rgba(0, 0, 0, 0.25);
        border-radius: 3%;
        padding-bottom: 4%;
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
        color: #59833D;
        font-family: Mitr-Medium, sans-serif;
        background-color: #ffffff;
        border: 1px solid #59833D;
    }

    .page-item.active .page-link {
        background-color: #59833D;
        border-color: #59833D;
    }

    .border-radius {
        border-radius: 23px;
    }

    .green-text {
        color: #59843d;
    }
</style>
