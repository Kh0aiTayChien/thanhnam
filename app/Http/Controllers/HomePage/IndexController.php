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
        $categoryArticleSlug = "fpt-smart-home";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })

            ->take(6)
            ->get();
        return view('pages/service/pool/index', ['news' => $news]);
    }

    public function articles()
    {
        $categoryArticleSlug = "tin-tuc";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })
            ->take(6)
            ->get();

        return view('pages/news/index', ['news' => $news]);
    }
    public function articles_cong_trinh()
    {
        $categoryArticleSlug = "thi-cong-cong-trinh";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })
            ->take(6)
            ->get();
        return view('pages/cong-trinh/pool/index', ['news' => $news]);
    }
    public function articles_kien_truc()
    {
        $categoryArticleSlug = "thiet-ke-kien-truc";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })

            ->take(6)
            ->get();
        return view('pages/kien-truc/pool/index', ['news' => $news]);
    }

    public function articles_noi_that()
    {
        $categoryArticleSlug = "thi-cong-noi-that";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })

            ->take(6)
            ->get();
        return view('pages/noi-that/pool/index', ['news' => $news]);
    }
    public function articles_vimar()
    {
        $categoryArticleSlug = "vimar";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })

            ->take(6)
            ->get();
        return view('pages/vimar/pool/index', ['news' => $news]);
    }
    public function show($slug, Request $request)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

//        SEOMeta::setTitle($article->title);
//        SEOMeta::setDescription('MinMinCare/'.$slug);
//
//        OpenGraph::setDescription('MinMinCare/'.$slug);
//        OpenGraph::setTitle($article->title);
//        OpenGraph::setUrl(route('tin-tuc.show',['slug' => $slug]));
//        OpenGraph::addProperty('type', 'article');
//        OpenGraph::addImage(url($article->image));
//
//        TwitterCard::setTitle($article->title);
//        TwitterCard::setSite('');
//
//        JsonLd::setTitle($article->title);
//        JsonLd::setDescription('MinMinCare/'.$slug);
//        JsonLd::addImage(url($article->image));
        return response()->view('pages.news.show.index',['article' => $article]);
    }
}
