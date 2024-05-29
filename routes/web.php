<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticlePoolController;
use App\Http\Controllers\ArticleCongTrinhController;
use App\Http\Controllers\ArticleKienTrucController;
use App\Http\Controllers\ArticleNoiThatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePage\IndexController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('homepage.index');
Auth::routes();
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('images', 'ImageController');
    Route::resource('products', 'ProductController');
    Route::resource('articles', 'ArticleController')->except(['index']);
    Route::get('index/{conditionView}', [ArticleController::class, 'index'])->name('articles.index');
    Route::delete('articles/forceDel/{article} ', [ArticleController::class, 'forceDestroy'])->name('articles.forceDestroy');
    Route::post('articles/trash/{article} ', [ArticleController::class, 'restore'])->name('articles.restore');

    Route::resource('article_pools', 'ArticlePoolController')->except(['index']);
    Route::get('article_pools', [ArticlePoolController::class, 'index'])->name('article_pools.index');

    Route::resource('article_cong_trinh', 'ArticleCongTrinhController')->except(['index']);
    Route::get('article_cong_trinh', [ArticleCongTrinhController::class, 'index'])->name('article_cong_trinh.index');

    Route::resource('article_kien_truc', 'ArticleKienTrucController')->except(['index']);
    Route::get('article_kien_truc', [ArticleKienTrucController::class, 'index'])->name('article_kien_truc.index');

    Route::resource('article_noi_that', 'ArticleNoiThatController')->except(['index']);
    Route::get('article_noi_that', [ArticleNoiThatController::class, 'index'])->name('article_noi_that.index');


//    Route::delete('articles/forceDel/{article} ', [ArticlePoolController::class, 'forceDestroy'])->name('article_pools.forceDestroy');
//    Route::post('articles/trash/{article} ', [ArticlePoolController::class, 'restore'])->name('article_pools.restore');

    Route::post('/order-number', [ArticleController::class, 'OrderNumber'])->name('admin.updateOrderNumber');
    Route::get('/media', [MediaController::class, 'index'])->name('admin.media.index');
    Route::post('/upload', [MediaController::class, 'upload'])->name('admin.media.upload');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/trash', [ArticleController::class, 'trashBin'])->name('admin.trashBin');
    Route::get('/about', function () {
        return view('admin/about');
    })->name('about');
});
Route::get('/thiet-ke-be-boi', [IndexController::class, 'pools'])->name('homepage.pool');
Route::get('/thi-cong-noi-that', [IndexController::class, 'articles_noi_that'])->name('homepage.articles_noi_that');
Route::get('/thi-cong-cong-trinh', [IndexController::class, 'articles_cong_trinh'])->name('homepage.articles_cong_trinh');
Route::get('/thiet-ke-kien-truc', [IndexController::class, 'articles_kien_truc'])->name('homepage.articles_kien_truc');

Route::get('/tin-tuc', [IndexController::class, 'articles'])->name('homepage.articles');
Route::get('/tin-tuc/{slug}', [IndexController::class, 'show'])->name('homepage.show');

Route::get('/gioi-thieu', function () {
    return view('pages/introduce/index');
});



