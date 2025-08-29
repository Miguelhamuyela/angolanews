<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\News;
use App\Models\Category;
use App\Models\Publication;
use App\Models\Video;
use App\Models\Galery;

class SiteController extends Controller
{
    /* Função Home - exibindo todos os carrosseis de algumas noticias e eventos com mais destaques e mais recentes */
    public function home()
    {
        /* Sessão Noticia por Categoria - Puxando a noticia mais recente de cada categoria */
        /* $news = News::select('news.*')
            ->whereIn('news.id', function ($query) {
                $query->selectRaw('MAX(id)')
                    ->from('news')
                    ->groupBy('category_id');
            })
            ->orderBy('created_at', 'desc')
            ->take(6) // se quiser limitar a 6 no máximo
            ->get();
        $categories = Category::all(); */

        /* Sessão das Noticias de Hoje */
        /* $today = News::orderBy('created_at', 'desc')->take(2)->get();
        $today1 = News::where('detach', 'destaque')->orderByDesc('id')->first();
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
 */
        /* --------- Sessão Noticia no Geral ----------------- */

        /* Noticias da categoria Politicas */
       /*  $newsPolicy = News::whereHas('category', function ($query) {
            $query->where('name', 'Política')->take(6);
        })->get(); */

        /* Noticias da categoria Culturas */
       /*  $newsCulture = News::whereHas('category', function ($query) {
            $query->where('name', 'Cultura')->take(6);
        })->get(); */

        /* --------- Sessão Ciências e Tecnologia */
        /* $newsTech = News::whereHas('category', function ($query) {
            $query->where('name', 'Tecnologia')->take(4);
        })->get();

        $categories = Category::where('name->name')->get(); */


        return view('site.home.index');
    }

    /* Função Sobre - exibindo as informações do site */
    /* public function about()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        return view('site.about.index', compact('breaknews'));
    } */

    /* Função Categoria - Mostando todas as categorias */
  /*   public function category()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        return view('site.category.index');
    } */

    /* Eventos */

    /* public function eventCategory()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $events = Event::with('category')->has('category')->get();
        return view('site.category.events.eventCategory', compact('events', 'breaknews'));
    } */

   /*  public function eventView(Event $event)
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $event = Event::with('category', 'author')->findOrFail($event->id);
        return view('site.category.events.eventView', compact('event', 'breaknews'));
    } */

    /* Notícias */

   /*  public function NewsCategory()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $news = News::with('category')->get();
        return view('site.category.news.newsCategory', compact('news', 'breaknews'));
    } */


   /*  public function newsView(News $news)
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $news = News::with('category')->findOrFail($news->id);
        return view('site.category.news.newsView', compact('news', 'breaknews'));
    } */

    /* Ppliticas */

    /* public function policy()
    {
        $news = News::whereHas('category', function ($query) {
            $query->where('name', 'Política');
        })->get();
        $categories = Category::where('name->name')->get();
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();

        return view('site.category.policy.policy', compact('news', 'categories', 'breaknews'));
    }
 */
   /*  public function policyView(News $news)
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $news = News::with('category')->findOrFail($news->id);
        return view('site.category.policy.policyView', compact('news', 'breaknews'));
    } */

    /* Multimédia */

    /* public function publication()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $publications = Publication::all();
        return view('site.multimedia.publication', compact('publications', 'breaknews'));
    } */

    /* public function videos()
    {
        $videos = Video::all();
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        return view('site.multimedia.videos', compact('videos', 'breaknews'));
    } */

   /*  public function galery(){
        $galeries = Galery::all();
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        return view('site.multimedia.galery', compact('galeries', 'breaknews'));
    } */
   /*  public function api()
    {
        $event = Event::all();
        return response()->json($event);
    } */

  /*   public function show($id)
    {
        $event = Event::find($id);
        if ($event) {
            return response()->json($event);
        } else {
            return response()->json(['message' => 'Evento não encontrado.'], 404);
        }
    } */
}
