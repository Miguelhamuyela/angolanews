<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TypeCategoryController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\GaleryController;


/*-------------------------------------------------------
                    Site Routes
-------------------------------------------------------*/

Route::redirect('/', 'site/home');
/* Route::get('admin/', function () {
    return view('_admin.index');
}); */

Route::get('site/home', [SiteController::class, 'home'])->name('site.home');
/* Route::get('site/contact', [SiteController::class, 'contact'])->name('site.contact');
Route::get('site/about', [SiteController::class, 'about'])->name('site.about'); */
/* Routas de Categorias */
/* Route::get('site/category', [SiteController::class, 'category'])->name('site.category');
Route::get('site/policy', [SiteController::class, 'policy'])->name('site.policy');
Route::get('site/newsCategory', [SiteController::class, 'newsCategory'])->name('site.newsCategory');
Route::get('site/eventCategory', [SiteController::class, 'eventCategory'])->name('site.eventCategory');
Route::get('site/allNews', [SiteController::class, 'allNews'])->name('site.allNews'); */
/* Routas de Visualizações */
/* Route::get('site/eventView/{event}', [SiteController::class, 'eventView'])->name('site.eventView');
Route::get('site/newsView/{news}', [SiteController::class, 'newsView'])->name('site.newsView');
Route::get('site/policyView/{news}', [SiteController::class, 'policyView'])->name('site.policyView');
Route::get('site/publication', [SiteController::class, 'publication'])->name('site.publication');
Route::get('site/videos', [SiteController::class, 'videos'])->name('site.videos');
Route::get('site/galery', [SiteController::class, 'galery'])->name('site.galery'); */

/* API */
Route::get('site/api/', [SiteController::class, 'api'])->name('site.api');
Route::get('site/apiShow/{id}', [SiteController::class, 'apiShow'])->name('site.apiShow');

/*================================================================================================================ */


/*-------------------------------------------------------
                    Dashboard routes
-------------------------------------------------------*/
Route::get('admin/dashboard', function () {
    return view('_admin.dashboard.crm.index');
});
/*-------------------------------------------------------
                    Category routes
-------------------------------------------------------*/

Route::prefix('_admin.categories')->name('admin.')->group(function () {
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('categoryCreate', [CategoryController::class, 'create'])->name('category.create');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('categoryView/{category}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('categoryEdit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('categoryUpdate/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('categoryDelete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');
});
/*-------------------------------------------------------
                    Author routes
-------------------------------------------------------*/

Route::prefix('_admin.authors')->name('admin.')->group(function () {
    Route::get('author', [AuthorController::class, 'index'])->name('author.index');
    Route::get('authorCreate', [AuthorController::class, 'create'])->name('author.create');
    Route::post('authorStore', [AuthorController::class, 'store'])->name('author.store');
    Route::get('authorView/{author}', [AuthorController::class, 'show'])->name('author.show');
    Route::get('authorEdit/{author}', [AuthorController::class, 'edit'])->name('author.edit');
    Route::put('authorUpdate/{author}', [AuthorController::class, 'update'])->name('author.update');
    Route::get('authorDelete/{author}', [AuthorController::class, 'destroy'])->name('author.delete');
});


/*-------------------------------------------------------
                    News routes
-------------------------------------------------------*/
Route::prefix('_admin.news')->name('admin.')->group(function () {
    Route::get('news', [NewsController::class, 'index'])->name('news.index');
    Route::get('newsCreate', [NewsController::class, 'create'])->name('news.create');
    Route::post('newsStore', [NewsController::class, 'store'])->name('news.store');
    Route::get('newsEdit/{news}', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('newsUpdate/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::get('newsViews/{news}', [NewsController::class, 'show'])->name('news.view');
    Route::get('newsDelete/{news}', [NewsController::class, 'destroy'])->name('news.delete');
    Route::resource('tags', TagController::class);
});


/* -----------------------------------------------
                    Event Routes
--------------------------------------------------*/
Route::prefix('_admin/events')->name('admin.')->group(function () {
    Route::get('event', [EventController::class, 'index'])->name('event.index');
    Route::get('eventCreate', [EventController::class, 'create'])->name('event.create');
    Route::post('eventStore', [EventController::class, 'store'])->name('event.store');
    Route::get('eventEdit/{event}', [EventController::class, 'edit'])->name('event.edit');
    Route::put('eventUpdate/{event}', [EventController::class, 'update'])->name('event.update');
    Route::get('eventView/{event}', [EventController::class, 'show'])->name('event.view');
    Route::get('eventDelete/{event}', [EventController::class, 'destroy'])->name('event.delete');
});


/*-------------------------------------------------------
                    Comment Routes
-------------------------------------------------------*/

Route::prefix('_admin/comments')->name('admin.')->group(function () {
    Route::get('comment', [CommentController::class, 'index'])->name('comments.index');
    Route::get('commentCreate', [CommentController::class, 'create'])->name('comment.create');
    Route::post('commentStore', [CommentController::class, 'store'])->name('comment.store');
    Route::get('commentEdit/{comment}', [CommentController::class, 'edit'])->name('comment.edit');
    Route::put('commentUpdate/{comment}', [CommentController::class, 'update'])->name('comment.update');
    Route::get('commentView/{comment}', [CommentController::class, 'show'])->name('comment.view');
    Route::get('commentDelete/{comment}', [CommentController::class, 'destroy'])->name('comment.delete');
});

/*-------------------------------------------------------
                    Tags Routes
-------------------------------------------------------*/

Route::prefix('_admin.tags')->name('admin.')->group(function () {
    Route::get('tags', [TagController::class, 'index'])->name('tags.index');
    Route::get('tagCreate', [TagController::class, 'create'])->name('tag.create');
    Route::post('tagStore', [TagController::class, 'store'])->name('tag.store');
    Route::get('tagEdit/{tag}', [TagController::class, 'edit'])->name('tag.edit');
    Route::put('tagUpdate/{tag}', [TagController::class, 'update'])->name('tag.update');
    Route::get('tagView/{tag}', [TagController::class, 'show'])->name('tag.view');
    Route::get('tagDelete/{tag}', [TagController::class, 'destroy'])->name('tag.delete');
});

/*-------------------------------------------------------
               TypeCategory Routes
-------------------------------------------------------*/

Route::prefix('_admin.typeCategories')->name('admin.')->group(function () {
    Route::get('typeCategory', [TypeCategoryController::class, 'index'])->name('typeCategories.index');
    Route::get('typeCategoryCreate', [TypeCategoryController::class, 'create'])->name('typeCategory.create');
    Route::post('typeCategories', [TypeCategoryController::class, 'store'])->name('typeCategories.store');
    Route::get('typeCategoryView/{typeCategory}', [TypeCategoryController::class, 'show'])->name('typeCategory.show');
    Route::get('typeCategoryEdit/{typeCategory}', [TypeCategoryController::class, 'edit'])->name('typeCategory.edit');
    Route::put('typeCategoryUpdate/{typeCategory}', [TypeCategoryController::class, 'update'])->name('typeCategory.update');
    Route::get('typeCategoryDelete/{typeCategory}', [TypeCategoryController::class, 'destroy'])->name('typeCategory.delete');
});

/* -----------------------------------------------
                    publication Routes
--------------------------------------------------*/
Route::prefix('_admin/publications')->name('admin.')->group(function () {
    Route::get('publication', [PublicationController::class, 'index'])->name('publication.index');
    Route::get('publicationCreate', [PublicationController::class, 'create'])->name('publication.create');
    Route::post('publicationStore', [PublicationController::class, 'store'])->name('publication.store');
    Route::get('publicationEdit/{publication}', [PublicationController::class, 'edit'])->name('publication.edit');
    Route::put('publicationUpdate/{publication}', [PublicationController::class, 'update'])->name('publication.update');
    Route::get('publicationView/{publication}', [PublicationController::class, 'show'])->name('publication.view');
    Route::get('publicationDelete/{publication}', [PublicationController::class, 'destroy'])->name('publication.delete');
});
/* -----------------------------------------------
                    video Routes
--------------------------------------------------*/
Route::prefix('_admin/videos')->name('admin.')->group(function () {
    Route::get('video', [VideoController::class, 'index'])->name('video.index');
    Route::get('videoCreate', [VideoController::class, 'create'])->name('video.create');
    Route::post('videoStore', [VideoController::class, 'store'])->name('video.store');
    Route::get('videoEdit/{video}', [videoController::class, 'edit'])->name('video.edit');
    Route::put('videoUpdate/{video}', [videoController::class, 'update'])->name('video.update');
    Route::get('videoView/{video}', [videoController::class, 'show'])->name('video.view');
    Route::get('videoDelete/{video}', [videoController::class, 'destroy'])->name('video.delete');
});
/* -----------------------------------------------
                    galery Routes
--------------------------------------------------*/
Route::prefix('_admin/galeries')->name('admin.')->group(function () {
    Route::get('galery', [GaleryController::class, 'index'])->name('galery.index');
    Route::get('galeryCreate', [GaleryController::class, 'create'])->name('galery.create');
    Route::post('galeryStore', [GaleryController::class, 'store'])->name('galery.store');
    Route::get('galeryEdit/{galery}', [GaleryController::class, 'edit'])->name('galery.edit');
    Route::put('galeryUpdate/{galery}', [GaleryController::class, 'update'])->name('galery.update');
    Route::get('galeryView/{galery}', [GaleryController::class, 'show'])->name('galery.view');
    Route::get('galeryDelete/{galery}', [GaleryController::class, 'destroy'])->name('galery.delete');
});

