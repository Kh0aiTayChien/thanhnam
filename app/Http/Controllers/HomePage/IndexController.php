<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMailable;
use App\Models\Article;
use App\Models\Cart;
use App\Models\Image;
use App\Models\Product;
use App\Models\Session;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\Category;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        SEOMeta::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam');
        SEOMeta::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam thành lập vào tháng 11 năm 2019
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');

        OpenGraph::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam thành lập vào tháng 11 năm 2019
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');
        OpenGraph::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam');
        OpenGraph::setUrl('https://thanhnamshome.vn');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage(asset('img/seo.png'));

        TwitterCard::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam');
        TwitterCard::setSite('');

        JsonLd::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam');
        JsonLd::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam thành lập vào tháng 11 năm 2019
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');
        JsonLd::addImage(asset('img/seo.png'));

        $categoryImgSlug = "anh-banner-trang-chu";
        $images = Image::whereHas('category', function ($query) use ($categoryImgSlug) {
            $query->where('slug', $categoryImgSlug);
        })->get();

        $categoryArticleSlug = "tin-tuc";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })
            ->where('status', 1)
            ->take(6)
            ->get();

        $courses = Product::all();

        return view('pages/home-page/index', ['news' => $news, 'images' => $images, 'courses' => $courses]);
    }

    public function pools()
    {
        SEOMeta::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - FPT SMARTHOME');
        SEOMeta::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - FPT SMARTHOME
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');

        OpenGraph::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - FPT SMARTHOME
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');
        OpenGraph::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam FPT SMART HOME');
        OpenGraph::setUrl('https://thanhnamshome.vn/fpt-smart-home');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage(asset('img/seo.png'));

        TwitterCard::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - FPT SMARTHOME');
        TwitterCard::setSite('');

        JsonLd::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam');
        JsonLd::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - FPT SMARTHOME
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');
        JsonLd::addImage('https://thanhnamshome.vn/images/header/LOGO_THANHNAM.png');

        $categoryArticleSlug = "fpt-smart-home";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })

            ->paginate(3);
        return view('pages/service/pool/index', ['news' => $news]);
    }

    public function articles()
    {
        SEOMeta::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - tin tức');
        SEOMeta::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - tin tức
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');

        OpenGraph::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - tin tức
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');
        OpenGraph::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - tin tức');
        OpenGraph::setUrl('https://thanhnamshome.vn/tin-tuc');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage(asset('img/seo.png'));

        TwitterCard::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - tin tức');
        TwitterCard::setSite('');

        JsonLd::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam');
        JsonLd::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - tin tức
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng ');
        JsonLd::addImage('https://thanhnamshome.vn/images/header/LOGO_THANHNAM.png');

        $categoryArticleSlug = "tin-tuc";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        return view('pages/news/index', ['news' => $news]);
    }
    public function articles_rem_cua()
    {
        SEOMeta::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - thi công công trình');
        SEOMeta::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - thi công công trình
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');

        OpenGraph::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - thi công công trình
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');
        OpenGraph::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - thi công công trình');
        OpenGraph::setUrl('https://thanhnamshome.vn/thi-cong-cong-trinh');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage(asset('img/seo.png'));

        TwitterCard::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - thi công công trình');
        TwitterCard::setSite('');

        JsonLd::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam');
        JsonLd::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - thi công công trình
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng ');
        JsonLd::addImage('https://thanhnamshome.vn/images/header/LOGO_THANHNAM.png');

        $categoryArticleSlug = "rem-cua";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })
            ->orderBy('created_at', 'desc')
            ->paginate(3);
        return view('pages/rem-cua/pool/index', ['news' => $news]);
    }
    public function articles_kien_truc()
    {
        SEOMeta::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - thiết kế kiến trúc');
        SEOMeta::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - thiết kế kiến trúc
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');

        OpenGraph::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - thiết kế kiến trúc
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');
        OpenGraph::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - thiết kế kiến trúc');
        OpenGraph::setUrl('https://thanhnamshome.vn/thiet-ke-kien-truc');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage(asset('img/seo.png'));

        TwitterCard::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - thiết kế kiến trúc');
        TwitterCard::setSite('');

        JsonLd::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam');
        JsonLd::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - thiết kế kiến trúc
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng ');
        JsonLd::addImage('https://thanhnamshome.vn/images/header/LOGO_THANHNAM.png');

        $categoryArticleSlug = "thiet-ke-kien-truc";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })
            ->orderBy('created_at', 'desc')
            ->paginate(3);
        return view('pages/kien-truc/pool/index', ['news' => $news]);
    }

    public function articles_noi_that()
    {
        SEOMeta::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - thiết kế kiến trúc');
        SEOMeta::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - thi công nội thất
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');

        OpenGraph::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - thi công nội thất
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');
        OpenGraph::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - thi công nội thất');
        OpenGraph::setUrl('https://thanhnamshome.vn/thi-cong-noi-that');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage(asset('img/seo.png'));

        TwitterCard::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - thi công nội thất');
        TwitterCard::setSite('');

        JsonLd::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam');
        JsonLd::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - thi công nội thất
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng ');
        JsonLd::addImage('https://thanhnamshome.vn/images/header/LOGO_THANHNAM.png');

        $categoryArticleSlug = "thi-cong-noi-that";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })
            ->orderBy('created_at', 'desc')
            ->paginate(3);
        return view('pages/noi-that/pool/index', ['news' => $news]);
    }
    public function articles_vimar()
    {
        SEOMeta::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - vimar');
        SEOMeta::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - vimar
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');

        OpenGraph::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - vimar
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và vimar');
        OpenGraph::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - vimar');
        OpenGraph::setUrl('https://thanhnamshome.vn/vimar');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage(asset('img/seo.png'));

        TwitterCard::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - vimar');
        TwitterCard::setSite('');

        JsonLd::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam');
        JsonLd::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - vimar
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng ');
        JsonLd::addImage('https://thanhnamshome.vn/images/header/LOGO_THANHNAM.png');

        $categoryArticleSlug = "vimar";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })
            ->orderBy('created_at', 'desc')
            ->paginate(3);
        return view('pages/vimar/pool/index', ['news' => $news]);
    }

    public function articles_xay_nha_tron_goi()
    {
        SEOMeta::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - xây nhà trọn gói');
        SEOMeta::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - xây nhà trọn gói
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');

        OpenGraph::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - xây nhà trọn gói
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và xây nhà trọn gói');
        OpenGraph::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - xây nhà trọn gói');
        OpenGraph::setUrl('https://thanhnamshome.vn/xay-nha-tron-goi');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage(asset('img/seo.png'));

        TwitterCard::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - xây nhà trọn gói');
        TwitterCard::setSite('');

        JsonLd::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam');
        JsonLd::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - xây nhà trọn gói
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng ');
        JsonLd::addImage('https://thanhnamshome.vn/images/header/LOGO_THANHNAM.png');

        $categoryArticleSlug = "xay-nha-tron-goi";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })
            ->orderBy('created_at', 'desc')
            ->paginate(3);
        return view('pages/xay-nha-tron-goi/pool/index', ['news' => $news]);
    }

    public function articles_sua_chua_nha_tron_goi()
    {
        SEOMeta::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - xây nhà trọn gói');
        SEOMeta::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - xây nhà trọn gói
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng');

        OpenGraph::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - xây nhà trọn gói
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và xây nhà trọn gói');
        OpenGraph::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - xây nhà trọn gói');
        OpenGraph::setUrl('https://thanhnamshome.vn/xay-nha-tron-goi');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage(asset('img/seo.png'));

        TwitterCard::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam - xây nhà trọn gói');
        TwitterCard::setSite('');

        JsonLd::setTitle('Công ty TNHH kỹ thuật và thương mại Thành Nam');
        JsonLd::setDescription('Công ty TNHH kỹ thuật và thương mại Thành Nam - xây nhà trọn gói
        . Hoạt động trong lĩnh vực xây dựng dân dụng, xây dựng giao thông hạ tầng và thi công nhà xưởng ');
        JsonLd::addImage('https://thanhnamshome.vn/images/header/LOGO_THANHNAM.png');

        $categoryArticleSlug = "sua-chua-nha-tron-goi";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })
            ->orderBy('created_at', 'desc')
            ->paginate(3);
        return view('pages/sua-chua-nha-tron-goi/pool/index', ['news' => $news]);
    }


    public function show($slug, Request $request)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        SEOMeta::setTitle($article->title);
        SEOMeta::setDescription('/thanhnamshome.vn/tin-tuc/'.$slug);

        OpenGraph::setDescription('/thanhnamshome.vn/tin-tuc/'.$slug);
        OpenGraph::setTitle($article->title);
        OpenGraph::setUrl(route('homepage.show',['slug' => $slug]));
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage(url($article->image));

        TwitterCard::setTitle($article->title);
        TwitterCard::setSite('');

        JsonLd::setTitle($article->title);
        JsonLd::setDescription('/thanhnamshome.vn/tin-tuc/'.$slug);
        JsonLd::addImage(url($article->image));
        return response()->view('pages.news.show.index',['article' => $article]);
    }

    public function show_kien_truc($slug, Request $request)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        SEOMeta::setTitle($article->title);
        SEOMeta::setDescription('/thanhnamshome.vn/thiet-ke-kien-truc/'.$slug);

        OpenGraph::setDescription('/thanhnamshome.vn/thiet-ke-kien-truc/'.$slug);
        OpenGraph::setTitle($article->title);
        OpenGraph::setUrl(route('kientruc.show',['slug' => $slug]));
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage(url($article->image));

        TwitterCard::setTitle($article->title);
        TwitterCard::setSite('');

        JsonLd::setTitle($article->title);
        JsonLd::setDescription('/thanhnamshome.vn/thiet-ke-kien-truc/'.$slug);
        JsonLd::addImage(url($article->image));
        return response()->view('pages.kien-truc.show.index',['article' => $article]);
    }

    public function show_noi_that($slug, Request $request)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        SEOMeta::setTitle($article->title);
        SEOMeta::setDescription('/thanhnamshome.vn/thi-cong-noi-that/'.$slug);

        OpenGraph::setDescription('/thanhnamshome.vn/thi-cong-noi-that/'.$slug);
        OpenGraph::setTitle($article->title);
        OpenGraph::setUrl(route('noithat.show',['slug' => $slug]));
        OpenGraph::addProperty('type', 'article');
        if (!empty($article->image)) {
            OpenGraph::addImage(url($article->image));
        }

        TwitterCard::setTitle($article->title);
        TwitterCard::setSite('');

        JsonLd::setTitle($article->title);
        JsonLd::setDescription('/thanhnamshome.vn/thi-cong-noi-that/'.$slug);
        if (!empty($article->image)) {
            JsonLd::addImage(url($article->image));
        }
        return response()->view('pages.noi-that.show.index',['article' => $article]);
    }

    public function show_fpt($slug, Request $request)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        SEOMeta::setTitle($article->title);
        SEOMeta::setDescription('/thanhnamshome.vn/fpt-smart-home/'.$slug);

        OpenGraph::setDescription('/thanhnamshome.vn/fpt-smart-home/'.$slug);
        OpenGraph::setTitle($article->title);
        OpenGraph::setUrl(route('noithat.show',['slug' => $slug]));
        OpenGraph::addProperty('type', 'article');
        if (!empty($article->image)) {
            OpenGraph::addImage(url($article->image));
        }

        TwitterCard::setTitle($article->title);
        TwitterCard::setSite('');

        JsonLd::setTitle($article->title);
        JsonLd::setDescription('/thanhnamshome.vn/fpt-smart-home/'.$slug);
        if (!empty($article->image)) {
            JsonLd::addImage(url($article->image));
        }
        return response()->view('pages.service.show.index',['article' => $article]);
    }

    public function show_vimar($slug, Request $request)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        SEOMeta::setTitle($article->title);
        SEOMeta::setDescription('/thanhnamshome.vn/vimar/'.$slug);

        OpenGraph::setDescription('/thanhnamshome.vn/vimar/'.$slug);
        OpenGraph::setTitle($article->title);
        OpenGraph::setUrl(route('vimar.show',['slug' => $slug]));
        OpenGraph::addProperty('type', 'article');
        if (!empty($article->image)) {
            OpenGraph::addImage(url($article->image));
        }

        TwitterCard::setTitle($article->title);
        TwitterCard::setSite('');

        JsonLd::setTitle($article->title);
        JsonLd::setDescription('/thanhnamshome.vn/vimar/'.$slug);
        if (!empty($article->image)) {
            JsonLd::addImage(url($article->image));
        }
        return response()->view('pages.vimar.show.index',['article' => $article]);
    }

    public function show_rem_cua($slug, Request $request)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        SEOMeta::setTitle($article->title);
        SEOMeta::setDescription('/thanhnamshome.vn/rem-cua/'.$slug);

        OpenGraph::setDescription('/thanhnamshome.vn/rem-cua/'.$slug);
        OpenGraph::setTitle($article->title);
        OpenGraph::setUrl(route('remcua.show',['slug' => $slug]));
        OpenGraph::addProperty('type', 'article');
        if (!empty($article->image)) {
            OpenGraph::addImage(url($article->image));
        }

        TwitterCard::setTitle($article->title);
        TwitterCard::setSite('');

        JsonLd::setTitle($article->title);
        JsonLd::setDescription('/thanhnamshome.vn/remcua/'.$slug);
        if (!empty($article->image)) {
            JsonLd::addImage(url($article->image));
        }
        return response()->view('pages.rem-cua.show.index',['article' => $article]);
    }

    public function show_xay_nha_tron_goi($slug, Request $request)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        SEOMeta::setTitle($article->title);
        SEOMeta::setDescription('/thanhnamshome.vn/show_xay_nha_tron_goi/'.$slug);

        OpenGraph::setDescription('/thanhnamshome.vn/show_xay_nha_tron_goi/'.$slug);
        OpenGraph::setTitle($article->title);
        OpenGraph::setUrl(route('xay_nha_tron_goi.show',['slug' => $slug]));
        OpenGraph::addProperty('type', 'article');
        if (!empty($article->image)) {
            OpenGraph::addImage(url($article->image));
        }

        TwitterCard::setTitle($article->title);
        TwitterCard::setSite('');

        JsonLd::setTitle($article->title);
        JsonLd::setDescription('/thanhnamshome.vn/xay_nha_tron_goi/'.$slug);
        if (!empty($article->image)) {
            JsonLd::addImage(url($article->image));
        }
        return response()->view('pages.rem-cua.show.index',['article' => $article]);
    }

    public function show_sua_chua_nha_tron_goi($slug, Request $request)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        SEOMeta::setTitle($article->title);
        SEOMeta::setDescription('/thanhnamshome.vn/show_sua_chua_nha_tron_goi/'.$slug);

        OpenGraph::setDescription('/thanhnamshome.vn/show_sua_chua_nha_tron_goi/'.$slug);
        OpenGraph::setTitle($article->title);
        OpenGraph::setUrl(route('sua_chua_nha_tron_goi.show',['slug' => $slug]));
        OpenGraph::addProperty('type', 'article');
        if (!empty($article->image)) {
            OpenGraph::addImage(url($article->image));
        }

        TwitterCard::setTitle($article->title);
        TwitterCard::setSite('');

        JsonLd::setTitle($article->title);
        JsonLd::setDescription('/thanhnamshome.vn/sua_chua_nha_tron_goi/'.$slug);
        if (!empty($article->image)) {
            JsonLd::addImage(url($article->image));
        }
        return response()->view('pages.sua-chua-nha-tron-goi.show.index',['article' => $article]);
    }

    public function send(Request $request)
    {
        $viewData = [
            'status' => 'register_send',
        ];
        $name = $request->name;
        $phone = $request->phone;
        $question = $request->question;
        Mail::to('chien.hcckt@gmail.com')->send(new RegisterMailable($name, $phone, $question));
        return response()->json($viewData);
    }
}
