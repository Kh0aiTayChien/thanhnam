<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
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
            ->paginate(6);

        return view('pages/news/index', ['news' => $news]);
    }
    public function articles_cong_trinh()
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

        $categoryArticleSlug = "thi-cong-cong-trinh";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })
            ->paginate(3);
        return view('pages/cong-trinh/pool/index', ['news' => $news]);
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

            ->paginate(3);
        return view('pages/vimar/pool/index', ['news' => $news]);
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
}
