<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = Comment::orderByDesc('id')->get();
        return view('_admin.comments.comment.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $news = News::all(); // Busca todas as notícias cadastradas
        return view('_admin.comments.commentCreate.index', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'text_comment' => 'required|string|max:1000',
            'author_comment' => 'required|string|max:255',
            'date' => 'required|date|after_or_equal:today',
            'news_id' => 'required|exists:news,id',
        ], [
            'text_comment.required' => 'O conteúdo é obrigatório.',
            'author_comment.required' => 'O autor é obrigatório.',
            'text_comment.max' => 'O campo comentário não pode ter mais de 1000 caracteres.',
            'author_comment.max' => 'O campo autor não pode ter mais de 255 caracteres.',
            'news_id.exists' => 'A notícia selecionada não existe.',
        ]);

        Comment::create([
            'text_comment' => $request->text_comment,
            'author_comment' => $request->author_comment,
            'date' => $request->date,
            'news_id' => $request->news_id,
        ], [
            'text_comment.required' => 'O conteúdo é obrigatório.',
            'author_comment.required' => 'O autor é obrigatório.',
            'text_comment.max' => 'O campo comentário não pode ter mais de 1000 caracteres.',
            'author_comment.max' => 'O campo autor não pode ter mais de 255 caracteres.',
            /* 'news_id.exists' => 'A notícia selecionada não existe.', */
        ]);

        return redirect()->route('admin.comments.index')->with('success', 'Comentário criado com sucesso.');
        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar Comentário!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
        return view('_admin.comments.commentView.index', ['comment' => $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
        return view('_admin.comments.commentEdit.index', ['comment' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
        $request->validate([
            'text_comment' => 'required|string|max:1000',
            'author_comment' => 'required|string|max:255',
            'date' => 'required|date|after_or_equal:today',
            /* 'news_id' => 'required|exists:news,id', */
        ], [
            'text_comment.required' => 'O conteúdo é obrigatório.',
            'author_comment.required' => 'O autor é obrigatório.',
            'text_comment.max' => 'O campo comentário não pode ter mais de 1000 caracteres.',
            'author_comment.max' => 'O campo autor não pode ter mais de 255 caracteres.',
            /* 'news_id.exists' => 'A notícia selecionada não existe.', */
        ]);

        $comment->update([
            'text_comment' => $request->trait_exists,
            'author_comment' => $request->author_comment,
            'date' => $request->date,
            'news_id' => $request->news_id,
        ]);

        return redirect()->route('admin.comments.index')->with('success', 'Comentário atualizado com sucesso.');
        return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar Comentário!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
        $comment->delete();

        return redirect()->route('admin.comments.index')->with('success', 'Comentário excluído com sucesso.');
    }
}
