<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\Site\SiteController;
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
